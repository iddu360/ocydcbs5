document.getElementById('next').onclick = function () {
  let lists = document.querySelectorAll('.item');
  document.getElementById('slide').appendChild(lists[0]);
}
document.getElementById('prev').onclick = function () {
  let lists = document.querySelectorAll('.item');
  document.getElementById('slide').prepend(lists[lists.length - 1]);
};

// document.ready(function () {



//   $('#intro-slider').flexslider({
//     animation: 'fade',
//     controlNav: false,
//   })
// });

