//Api call
const json_data = [
{
    'id':1,
    'title': "Title 1",
    'status': "Active",
    'image': '-'
},
{
    'id': 2,
    'title': "Title 2",
    'status': "Active",
    'image': '-'
},
{
    'id':3,
    'title': "Title 3",
    'status': "Active",
    'image': '-'
},
];

// let i =0
// let html_var='';
// while(1 < json_data.length){
//     html_var += "<tr>";
//     html_var += "<td>"+(i+1)+"</td>";
//     html_var += "<td>"+ json_data[i].title +"</td>";
//     html_var += "<td>"+ json_data[i].status +"</td>";
//     html_var += "<td>"+ json_data[i].image +"</td>";
//     html_var += "<td><a href='' class='btn-link'>Edit</a> <a href='' class='btn-link'>Delete</a></td>";
//     html_var +="</tr>";
//     i++;
//     // loop iterate
// } 

//Time
function showClock(){
    const date = new Date();
    let hour = date.getHours();
    let minute = date.getMinutes();
    let seconds = date.getSeconds();
    if(minute < 10){
        minute = "0"+seconds;
    }
    document.getElementById('clock').innerHTML = (hour+":"+minute+":"+seconds);
}
setInterval(showClock, 1000)



// function
function showForm(){
    //logic
        
}


//document.getElementById('slider_content').innerHTML = html_var;

