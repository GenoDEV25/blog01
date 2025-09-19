function addPost() {
  window.location.href = "/admin/newPost";
  console.log("Navigating to /admin/newPost");
}

//* Modal para eliminar post
function openDeleteModal(postId, postTitle) {
  document.getElementById("deleteModal").classList.remove("hidden");
  document.getElementById("deletePostTitle").innerText = postTitle;
  document.getElementById(
    "deleteForm"
  ).action = `/admin/posts/delete/${postId}`;
}

function closeDeleteModal() {
  document.getElementById("deleteModal").classList.add("hidden");
}
