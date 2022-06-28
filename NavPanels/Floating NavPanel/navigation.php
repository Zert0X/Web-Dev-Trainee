<div class = "navigation">

        <span class="button" id="messages" onclick="activate(id)">
            <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
            <span class="text">Messages</span>
        </span>
        
        <span class="button" id="home" onclick="activate(id)">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="text">Home</span>
        </span>

        <span class="button" id="settings" onclick="activate(id)">
            <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
            <span class="text">Settings</span>
        </span>

        <div class = "indicator"></div>
    </div>
    <script>
        document.getElementById('home').classList.toggle('active')
        function activate(id){
            let buttons = document.querySelectorAll("span.button");
            buttons.forEach((item)=>item.classList.remove('active'));
            document.getElementById(id).classList.toggle('active')
        }
    </script>