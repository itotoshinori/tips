<head>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="box4">
<div class="text-xl">グーグルアカウントでログインできます</div>
    <a href="{{ route('login.google') }}">
        <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
    </a>
</div>
<style>
    .box4{
    padding: 8px 19px;
    margin: auto;
    color: #2c2c2f;
    background: #cde4ff;
    border-top: solid 5px #5989cf;
    border-bottom: solid 5px #5989cf;
}
.box4 p {
    margin: 0; 
    padding: 0;
}
</stle>
