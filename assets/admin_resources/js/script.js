let btnDelete = document.getElementsByClassName('btn-delete');
for (let i = 0; i < btnDelete.length; i++) {
    btnDelete[i].addEventListener('click', function() {
        let _this = this;
        if(confirm('Delet item?')) {
            // let form = this.parentNode.querySelector('form');
            // form.submit();

            let id = this.getAttribute('data-id');
            
            let request = new XMLHttpRequest();

            let data = new FormData();
            data.append('id', id);
            data.append('action', 'delete');

            request.open('POST', '/admin/?page=services');
            request.send(data);
            request.onload = function() {
                if(request.status == 200) {
                    console.log(request);
                    if(request.responseText == 'ok') {
                        _this.parentNode.parentNode.parentNode.remove();
                    }
                } 
            }

        }
    });    
}