// start sweet delete 
function lbdelete(e){
    const token = $('meta[name="csrf-token"]').attr('content');
       const url = $(e).data('href');
       let title = $(e).data('trans-title');
       let cancel = $(e).data('trans-button-cancel');
       let confirm = $(e).data('trans-button-confirm');
       let html = `<form action="`+url+`" method="POST" name="delete_item" style="display:none">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="`+token+`">
                    </form>`;
      Swal.fire({
        title: title,
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: confirm,
  cancelButtonText: cancel,
   confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  reverseButtons: true,
        }).then((result) => {
        if (result.isConfirmed) {
           $(e).append(html);
           $(e).find('form').submit();
        } 
     })
     return false;
   }
//    end sweat delete