var prev = 0
var next = 7
function funcNext() {
  if (next == 7 && prev >= 0) {
    next = next + 7
    prev = prev + 7
    displays()
  }
  else {
    alert("No Such More Items");
  }

}
function funcPrev() {
  if (prev == 7 && next >= 0) {
    next = next - 7
    prev = prev - 7
    displays()
  }
  else {
    alert("Previous is not Possible");
  }

}
function displays() {
  // "use strict";
  fetch("data/searches.json")
    .then(function (resp) {
      return resp.json();
    })
    .then(function (data) {

      var i;
      searched_list.innerHTML = ' '
      for (i = prev; i < next; i++) {
        console.log(data[i].id)
        var ids = data[i].id;
        var xx = data[i].images;
        var yy = data[i].mName;
        var aa = data[i].disease;
        var zz = data[i].amount;
        var bb = data[i].prescription;
        var cc = data[i].company;
        var dd = data[i].discription[0];
        var ff = data[i].discription;
        var ee = data[i].available[0];

        searched_list.innerHTML += `<div class="card"  style="width: 11.1rem; margin:4.2px;">
                <img src="${xx}"  style="height: 8rem">
                <div class="card-body">
              <h6 class="card-title">${yy}</h6>
              <p class="card-text">${dd}<br>${ee}</p>
              <h6 class="card-text">${zz}</h6>
              <form action="http://localhost/Online%20Medical%20Stores/pageFiles/orderNow.php" method="GET">
              <input type="hidden" name="amount" value="${zz}">
              <input type="hidden" name="id" value="${ids}">
              <button type="submit" value="Order" class="btn btn-danger">Order</button
              </form>
              <button type="button" class="btn btn-warning" id="${ids}" data-toggle="modal" data-target="#exampleModalLong${ids}">
                  info
                </button>   
             </div>
             </div>`;
        get_id = ids
        var pop = document.getElementById("popup");
        pop.innerHTML += `
      
             <div class="modal animated zoomIn" id="exampleModalLong${ids}" tabindex="-1" style="z-index:10000" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
             <div class="descImage" id="descImage${ids}">
                <img src="${data[get_id].images}" alt="">
            </div>  
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">${data[get_id].mName} ${dd}</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                   <p>
                     <ul>
                       <li><strong>Prefered for : </strong>${data[get_id].disease}</li>
                       <li><strong>Amount : </strong>${data[get_id].amount}</li>
                       <li><strong>Prescription : </strong>${data[get_id].prescription}</li>
                       <li><strong>Company : </strong>${data[get_id].company}</li>
                       <li><strong>Available : </strong>${data[get_id].available[0]}</li>
                       <li><strong>Discription : </strong>${data[get_id].discription}</li>
                       </ul>
                     </p>
                   </div>
                   <div class="modal-footer">
                   <form action="http://localhost/Online%20Medical%20Stores/pageFiles/orderNow.php" method="GET">
                   <input type="hidden" name="amount" value="${data[get_id].amount}">
                   <input type="hidden" name="id" value="${data[get_id].id}">
                   <input type="submit" value="Buy Now" class="btn btn-danger">
                   </form>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   </div>
                 </div>
               </div>
             </div>`;
      }
    })
}
displays()
const pain = document.getElementById('Pain');
const skin = document.getElementById('Skin');
const homecare = document.getElementById('HomeCare');
const babycare = document.getElementById('BabyCare');

const fitness = document.getElementById('Fitness');
const sexual = document.getElementById('Sexual');
const familycare = document.getElementById('FamilyCare');

const marketing = document.getElementById('Marketing');
const awarness = document.getElementById('Awarness');
const healthcamp = document.getElementById('HaelthCamp');


const search = document.getElementById('search_input');
const searched_list = document.getElementById('medicineDetails');

const searchMed = async searchText => {
  const res = await fetch('./data/searches.json');
  const searches = await res.json();

  console.log(searchText);

  var NamedOn = document.getElementById("namedFor");
  NamedOn.innerHTML = `Medicine >> ${searchText}`;

  let matches = searches.filter(medi => {

    const regex = new RegExp(`^${searchText}|[^${searchText}]\s${searchText}`, 'gi');
    try {
      if (medi.mName.match(regex) || medi.disease.match(regex) || medi.company.match(regex) || medi.catagory[0].match(regex) || medi.catagory[1].match(regex) || medi.catagory[2].match(regex))
        return medi.mName.match(regex) || medi.disease.match(regex) || medi.company.match(regex) || medi.catagory[0].match(regex) || medi.catagory[1].match(regex) || medi.catagory[2].match(regex);
    }
    catch{

    }

  });


  if (searchText.length === 0) {
    searched_list.innerHTML = '';
  }
  outputHtml(matches); 
  //var matches = outputHtml(matches);
};
// var left_search = 0;
// var right_search = 0;
// function funcNextSearch() {
//   var left_search = left_search + 0;
//   var right_search = right_search + 3;

  //searchMed(pain.innerHTML)


// }
const outputHtml = matches => {

  if (matches.length > 0) {
   // searched_list.innerHTML = ' '
    // for (i = left_search; i <= right_search; i++) {
      const html = matches.map(match => `
        <div class="card animated fadeInLeft"  style="width: 11.1rem; margin:2px;">
                        <img src="${match.images}"  style="height: 9rem">
                        <div class="card-body">
                      <h6 class="card-title">${match.mName}</h6>
                      <p class="card-text">${match.discription[0]}<br>${match.available[0]}</p>
                      <h6 class="card-text">${match.amount}</h6>
                      <form action="http://localhost/Online%20Medical%20Stores/pageFiles/orderNow.php" method="GET">
              <input type="hidden" name="amount" value="${match.amount}">
              <input type="hidden" name="id" value="${match.id}">
              <button type="submit" value="Order" class="btn btn-danger">Order</button
              </form>
                      <button type="button" class="btn btn-warning" id="${match.id}" data-toggle="modal" data-target="#exampleModalLong${match.id}">
                          info
                        </button>   
                     </div>
                     </div>
                     

                     `)
        .join('');
      searched_list.innerHTML = html;
  //     searched_list.innerHTML += `
  //     <div class="card"  style="width: 11.1rem; margin:2px;">
  //                     <img src="${matches[i].images}"  style="height: 9rem">
  //                     <div class="card-body">
  //                   <h6 class="card-title">${matches[i].mName}</h6>
  //                   <p class="card-text">${matches[i].discription[0]}<br>${matches[i].available[0]}</p>
  //                   <h6 class="card-text">${matches[i].amount}</h6>
  //                   <a href="#" class="btn btn-danger">ORDER</a>
  //                   <button type="button" class="btn btn-warning" id="${matches[i].id}" data-toggle="modal" data-target="#exampleModalLong${matches[i].id}">
  //                       info
  //                     </button>   
  //                  </div>
  //                  </div>
  //                  <div>
                   
  //                  `}

   }
  var nexPre = document.getElementById("nextPrev");
  if (matches.length <= 7) {
    nexPre.style.display = "none";
  }
  else {
    nexPre.style.display = "block";
    nexPre.style.display = "flex";
  }

 }
pain.addEventListener('click', () => searchMed(pain.innerHTML));
skin.addEventListener('click', () => searchMed(skin.innerHTML));
homecare.addEventListener('click', () => searchMed(homecare.innerHTML));
babycare.addEventListener('click', () => searchMed(babycare.innerHTML));

fitness.addEventListener('click', () => searchMed(fitness.innerHTML));
sexual.addEventListener('click', () => searchMed(sexual.innerHTML));
familycare.addEventListener('click', () => searchMed(familycare.innerHTML));

search.addEventListener('input', () => searchMed(search.value));
