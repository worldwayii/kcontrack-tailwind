

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
@livewireScripts
{{-- @livewireCalendarScripts --}}
    <script>
      function toggleMobileSideNav() {
        var element = document.getElementById("mobile-side-nav");
        if (element.classList.contains("left-[-100%]")) {
          element.classList.remove("left-[-100%]");
          element.classList.add("left-0");
        } else {
          element.classList.remove("left-0");
          element.classList.add("left-[-100%]");
        }
      }

      function allowDrop(ev) {
        ev.preventDefault();
      }

      function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
      }

      function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
      }

      // toggling of radio submenu selection
      function handleAllRadioSubmenuSelection() {
        const allSubmenuSelections = document.querySelectorAll(
          "[data-checkbox-subselection-target]"
        );

        allSubmenuSelections.forEach((item) => {
          const id = item.getAttribute("data-checkbox-subselection-target");
          const radioInput = item.querySelector("input");
          const submenu = document.getElementById(id);

          radioInput.addEventListener("click", () => {
            const currentlyShownSubmenuSelection = document.querySelector(
              "[data-checkbox-subselection-target] > div.flex:nth-of-type(2)"
            );

            if (submenu.classList.contains("flex")) {
              submenu.classList.remove("flex");
              submenu.classList.add("hidden");
            } else {
              submenu.classList.remove("hidden");
              submenu.classList.add("flex");
            }

            if (currentlyShownSubmenuSelection) {
              currentlyShownSubmenuSelection.classList.remove("flex");
              currentlyShownSubmenuSelection.classList.add("hidden");
            }
          });
        });
      }

      handleAllRadioSubmenuSelection();

      /*TOGGLE ROLE COVER*/
      let showColor = document.getElementById("showColor");
      showColor.style.transition = "0.2s";

      let showColord = document.getElementById("showColord");
      showColord.style.transition = "0.2s";

      function keep() {
        showColor.style.visibility = "visible";
        showColor.style.height = "57px";

      }

      function leave() {
        showColor.style.visibility = "hidden";
        showColor.style.height = "0px";
      }

      /*CHANGE ROLE COLOR*/
      function changeRole(x) {
        let change = document.getElementById("roleColor");
        let select = document.getElementById("role-color-element");
        change.style.background = x.style.background;
        change.style.borderColor = x.style.borderColor;

        select.value = x.style.background;

        Livewire.dispatch('roleColorChanged',{role_colour: change.style.background}); // Emitting the event with the correct parameter

      }

      function keepd() {
        showColord.style.visibility = "visible";
        showColord.style.height = "57px";
        console.log('keep direct');
      }

      function leaved() {
        showColord.style.visibility = "hidden";
        showColord.style.height = "0px";
        console.log('leave direct');
      }

      function changeRoled(x) {
        let changed = document.getElementById("roleColord");
        let selectd = document.getElementById("role-color-elementd");
        changed.style.background = x.style.background;
        changed.style.borderColor = x.style.borderColor;

        selectd.value = x.style.background;

        Livewire.dispatch('roleColorChanged',{role_colour: changed.style.background}); // Emitting the event with the correct parameter
        console.log('change role direct');

      }


    </script>

    <script src="{{asset('calender.js')}}"></script>
</body>
@yield('pageScript')
{{-- @livewireScripts --}}
{{-- @livewireCalendarScripts --}}

</html>
