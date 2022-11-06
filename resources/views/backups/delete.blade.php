@include('partials.header')


    <form action="/none">
            <input id="check" type="checkbox" name="type" value="1">1
            <input id="check" type="checkbox" name="type" value="2">2
            <input id="check" type="checkbox" name="type" value="3">3
            <input id="check" type="checkbox" name="type" value="4">4
            <input id="check" type="checkbox" name="type" value="5">5
            <br>
            <label id="resultss">sadsad</label>
            <input id="ss">

            <br>
            <button type="submit" class="bg-blue rounded mx-auto">Nexts</button></a>
    </form>
<br>

            <button id="showResult" type="submit" name="submit" value="submit" onclick="showsss(this);"
            class="bg-blue rounded mx-auto">Show checked values</button>
            <br><br>


<script>

    function showsss(){
        var array = [];
        var checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
         for (var i = 0; i < checkboxes.length; i++) {
            array.push(checkboxes[i].value);
         }
         document.getElementById('resultss').textContent = array.toString();
    }


    //from here to blank
    // function passValues(){
    //              var s = document.getElementById('resultss').value;

    //              localStorage.setItem('btch', s);

    //              return false;
    //              //window.location.href = "/authenticate";
    //          }
</script>


@include('partials.footer')


