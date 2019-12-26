i=-9;
loadGoods();
opts = ["opt1", "opt2"]

async function loadGoods() {
  let goods = await fetch('loadgoods.php').then(function (res) {
    return res.json()
  }).then(function (res) {
    if (res.message) alert(res.message);
    else  return res;
  })
  if(i==31){
    document.location.href = "haiku";
  }
  i+=10;
  ans = goods[i]['ans'];
  let out = '';

  out+= '<div class="tabl">'
  out+= '<h2>' + goods[i]['ques']+'</h2>';
  out+= '<p1>' + goods[i]['opt1']+'</p1>'+'<br>';
  out+= '<a id="opt2"  onclick="loadGoods()">' + goods[i]['opt2']+'</a>';
  out+= '</div>';

  let index = document.getElementById('releases__box');
  index.innerHTML = out;
}
