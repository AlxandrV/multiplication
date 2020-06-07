

// AJAX
document.getElementById("reqAjaxSubmit").addEventListener('submit', function(e){
    e.preventDefault();
    const form = document.getElementById('reqAjaxSubmit');
    const data = new FormData(form);
    let httpRequest = new XMLHttpRequest();
    
    if(!httpRequest){
        alert('Abandon : (Impossible de créer une instance de XMLHTTP');
        return false;
    }
    httpRequest.onreadystatechange = function(){
        console.log(this.readyState);
        if (this.readyState === 4) {
            if (this.status === 200) {
                console.log(this.responseText)
            } else {
                console.log("Error", this.statusText);
            }
        }
    };
    httpRequest.open('POST', 'ajax_page_6.php');
    httpRequest.send(data);
});