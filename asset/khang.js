const handleAddToCard = () => {
  alert("Thêm vào giỏ hàng thành công");
};
//js bên trang card
const handlefavourite = () => {
  alert("Đã thêm vào sản phẩm sản phẩm yêu thích");
};
// Lấy phần tử nút mở modal
var openModalBtn = document.getElementById("openModalBtn");
var myModal = new bootstrap.Modal(document.getElementById("modalHeaderFooter"));
// Thêm sự kiện khi nút được nhấn
openModalBtn.addEventListener("click", function () {
  myModal.show();
});
function closeModal() {
  var myModal = new bootstrap.Modal(
    document.getElementById("modalHeaderFooter")
  );
  myModal.hide();
}

var actionBtn = document.getElementById("actionBtn");
actionBtn.addEventListener("click", function () {
  myModal.hide();
  alert("Xóa sản phẩm thành công");
});
var btnClose = document.getElementById("btnClose");
btnClose.addEventListener("click", function () {
  myModal.hide();
});
var closeModal = document.getElementById("closeModal");
closeModal.addEventListener("click", function () {
  myModal.hide();
});


