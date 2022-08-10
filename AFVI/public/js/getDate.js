function getDate(){
    var today = new Date();
    var year = today.getFullYear();
     console.log(year);

document.getElementById("date_first_call_report").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


}
