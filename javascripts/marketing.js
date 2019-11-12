
var ctx = document.getElementById("horizontalBar").getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["Nicotex", "Paracetamol", "Bristol", "Horlicks", "Dabur", "Uniliver"],
datasets: [{
label: 'Sales of',
data: [12, 29, 3, 5, 2, 0],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',
'rgba(153, 102, 255, 0.2)',
'rgba(255, 159, 64, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
'rgba(255, 159, 64, 1)'
],
borderWidth: 0.5
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
//line
var ctxL = document.getElementById("linechart").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
datasets: [{
label: "Previous Datasets",
data: [5, 1.5, 2.5, 4, 4.5, 1, 3,4, 4.5, 2,2.5,3,4.5,3],
backgroundColor: [
'rgba(105, 0, 132, .2)',
],
borderColor: [
'rgba(200, 99, 132, .7)',
],
borderWidth: 2
},
{
label: "New Datasets",
data: [2.5, 3, 4.5, 1.5, 4, 4.5, 3, 3, 4.5, 1.5,2.5,4.5],
backgroundColor: [
'rgba(0, 137, 132, .2)',
],
borderColor: [
'rgba(0, 10, 130, .7)',
],
borderWidth: 2
}
]
},
options: {
responsive: true
}
});

