const pesan = {
    berhasil: function(pesan) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: pesan,
            showConfirmButton: true,
            toast: true
        });
    },
    gagal: function(pesan) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: pesan,
            showConfirmButton: true,
            toast: true
        });
    },
    hapus: function() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        });
    }
};

const btnDelete = document.querySelector(".btnDelete");
const formDelete = document.querySelector(".formDelete");

// btnDelete.addEventListener("click", function(e) {
//     e.preventDefault();
//     const action = formDelete.getAttribute("action");
//     console.log(action);
//     Swal.fire({
//         title: "Are you sure?",
//         text: "You won't be able to revert this!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Yes, delete it!"
//     }).then(result => {
//         if (result.isConfirmed) {
//             Swal.fire("Deleted!", "Your file has been deleted.", "success");
//         }
//     });
// });
