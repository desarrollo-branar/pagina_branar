const button_plan = document.querySelectorAll('#button_plan');
const select = document.getElementById('select_plan');

button_plan.forEach(button => {
  button.addEventListener('click', (e) =>{
    plan = button.getAttribute('data');

    options = select.options;
    count_option = select.options.length;

    for (let i = 0; i < count_option; i++) {
      option = options[i];
      optionId = options[i].getAttribute('id');

      if(optionId === plan){
        option.selected = true;
        console.log(option);
      } else {
        option.selected = false;
      }
    }
  })

});
