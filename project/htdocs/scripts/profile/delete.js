/********************************
 * cancelDeleteAccount
 *******************************/
const deleteAlter = document.getElementById("deleteAlter");
function cancelDeleteAccount() {
    deleteAlter.style.zIndex = -1;
    deleteAlter.style.opacity = 0;
}

/********************************
 * showDeleteInfo
 *******************************/
function showDeleteInfo() {
    deleteAlter.style.zIndex = 1;
    deleteAlter.style.opacity = 1;
}