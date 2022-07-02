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
    $('#clock').html(hour+":"+minute+":"+seconds);    // Both the way is the same 
    //document.getElementById('clock').innerHTML = (hour+":"+minute+":"+seconds);
}
setInterval(showClock, 1000)
// $, jQuery => Jquery initialization
//#(selector).event();
    // selector => is html node element 
    // selector can be either id, class or tag
    // if id is used use #
    //if class is used, use .
    // if tag is used do not use anything
//Event is an action that is being trigerred or fired or listened
// if event is empty, it's trigged or fire
// if callback is passed as a parameter, its event listening

//JQuery('#slider-add');

$(document).on('click', '#slider-add', function(e){
    $('#slider_table').slideToggle();
    $('#slider_form').toggleClass('d-none');
    $('#showForm').toggleHtml('Show Table')
});

//ajax
//asynchronous javascript and xml
//get, post, ajax

$.get('process/sliderapi.php?action=getAllSliders', function(res)){
    console.log("Repo: ", res);
});

//document.getElementById('slider_content').innerHTML = html_var;

