document.querySelector("#date").valueAsDate = new Date();
/*$(document).ready(function() {
  $('#').bootstrapValidator({
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      firstName: {
        validators: {
          notEmpty: {
            message: 'The first name is required and cannot be empty'
          }
        }
      },
      lastName: {
        validators: {
          notEmpty: {
            message: 'The last name is required and cannot be empty'
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: 'The email address is required'
          },
          emailAddress: {
            message: 'The input is not a valid email address'
          }
        }
      },
      gender: {
        validators: {
          notEmpty: {
            message: 'The gender is required'
          }
        }
      }
    },
    submitHandler: function(validator, form, submitButton) {
      var fullName = [validator.getFieldElements('firstName').val(),
        validator.getFieldElements('lastName').val()
      ].join(' ');
      alert('Hello ' + fullName);
    }
  });
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
/*(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();*/