@props(['disabled' => false])
<div class="d-flex flex">

    <input id="pwd_input" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm',
    ]) !!}>
    <i id="pwd-toggler" class=" fa fa-eye-slash fa-2x -ml-10 mt-2"> </i>
</div>
<script>
    document.querySelector('#pwd-toggler').onclick = function(e) {
        // params  
        const iconElem = e.target;// get the icon  
        const passwordInputElem = document.querySelector('#pwd_input')// get the pwd input
        //   Action : toggle password visibility
        togglePasswordVisibility(iconElem, passwordInputElem)
    }


    function togglePasswordVisibility(iconElem, passwordInputElem) {
      if (passwordInputElem.getAttribute('type', 'password') && iconElem.classList.contains('fa-eye-slash')) {
         passwordInputElem.setAttribute('type', 'text');
         iconElem.classList.replace('fa-eye-slash', 'fa-eye')
      } else {
         passwordInputElem.setAttribute('type', 'password');
         iconElem.classList.replace('fa-eye', 'fa-eye-slash')
      }
    }
</script>

<style scoped>
    .pwd-show {
        /* display: none; */

    }

    .pwd-toggle {
        opacity: 1;

    }
</style>
