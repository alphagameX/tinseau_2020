
   <footer>
       <div>
           <div class="partner">
               <h1>Nos partenaires :</h1>
                <div>
                    @foreach($partners as $partner)
                        <a href="{{$partner->url}}">
                            <img src="{{$partner->getLogo()}}">
                        </a>
                    @endforeach
                </div>
           </div>
           <div class="contact">
               <h1>Nous contactez: </h1>
               <p><a href="mailto:tinseau@gmail.com">tinseau@gmail.com</a></p>
               <p><a href="tel:0603012240">0603012240</a></p>
           </div>
           <div class="address">
               <h1>Notre adresse: </h1>
               <p>256 rue Laennec - 41350 VINEUIL</p>
               <p>EURL Challenge F1</p>
           </div>
       </div>
       <div class="copyright">
           <a href="#">Voir mentions légales</a>
           <p>(C) 2015 TINSEAU COPYRIGHT</p>
       </div>
   </footer>

    <div id="script"></div>

    {{--MENU SCRIPT--}}
    <script src="{{asset('/js/menu.js')}}"></script>
    {{--MAIN SCRIPT--}}
    <script src="{{asset('/js/app.js')}}"></script>
    {{--FONTAWESOME--}}
    @php enqueue_script(); @endphp
    <script src="https://kit.fontawesome.com/1cad8970fa.js" crossorigin="anonymous"></script>
</body>
</html>
