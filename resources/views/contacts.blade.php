<x-layout>
    <div class="container">
        <div class="row my-5 text-center justify-content-center">
            <div class="col-12 col-md-8 d-block">
                <h2>Ci puoi raggiungere qui:</h2>
            </div>
            <div class="col-12 col-md-8 d-block">
                <ul id="contactsList" class="pt-3 ps-0">
                    <li>
                        <label for="emailLink">Email:</label>
                        <a id="emailLink" href="mailto: dtt@dtt.it">dtt@dtt.it</a>
                    </li>
                    <li>
                        <label for="telLink">Tel:</label>
                        <a id="telLink" href="tel: +39 045000000">+39 045000000</a>
                    </li>
                    <li>
                        <label for="mapLink">Indirizzo:</label>
                        <a id="mapLink" target="_blank" href="https://www.google.com/maps/place/Via+Silvano+Buffa,+38050+Pieve+Tesino+TN/@46.0689984,11.6034651,16.74z/data=!4m5!3m4!1s0x477892bb26123977:0x64ae116a8119a3fa!8m2!3d46.0690974!4d11.6038033">Via Buffa, Pieve Tesino TV</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 my-3">
                <h2>Oppure richiedi un contatto con il dottore:</h2>
            </div>
            <form id="formBox" class="card col-11 col-md-8 text-center offset-md-2 mb-5 needs-validation">
                <h4 class="py-3">Inserisci i tuoi dati</h4>
                <div class="form-floating mx-auto mb-3">
                    <input type="text" class="form-control" id="nameInput" placeholder="Nome e cognome" required>
                    <label for="nameInput">Nome e cognome</label>
                    <div class="invalid-feedback">
                        Prego inserire nome e cognome
                    </div>
                </div>
                <div class="form-floating mx-auto mb-3">
                    <input type="email" class="form-control" id="emailInput" placeholder="Email" required>
                    <label for="emailInput">Email</label>
                    <div class="invalid-feedback">
                        Prego inserire un indirizzo email valido
                    </div>
                </div>
                <div class="form-floating mx-auto mb-3">
                    <textarea name="" id="messageInput" cols="30" rows="10" class="form-control" placeholder="Message" required></textarea>
                    <label for="messageInput">Message</label>
                    <div class="invalid-feedback">
                        Prego inserire un messaggio
                    </div>
                </div>
                <div class="mb-3">
                    <button id="contactFormButton" type="submit">Invia messaggio</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

{{-- prova --}}