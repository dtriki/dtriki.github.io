@extends('layouts.app')

@section('content')
    <!-- dodat background -->
    <script type="text/javascript"> document.body.style.backgroundImage = "url('https://image.ibb.co/bVHoPH/registerprepravljen.jpg')"; </script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dodaj psa') }}</div>

                    <div class="card-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/dog_register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ime psa') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                            <div class="form-group{{ $errors->has('race') ? ' has-error' : '' }}">
                                <label for="race" class="col-md-4 control-label">Rasa psa</label>
                                <div class="col-md-6">
                                    <select name="race" style="margin-top: 8px">
                                        <option value="0">Avganistanski hrt</option>
                                        <option value="1">Azavak</option>
                                        <option value="2">Aireski ovčar</option>
                                        <option value="3">                Akita</option>
                                        <option value="4">Alentejski pastirski pas</option>
                                        <option value="5">Alpski brak jazavičar</option>
                                        <option value="6"> Aljaski malamut</option>
                                        <option value="7"> Aljaski haski</option>
                                        <option value="8"> Američki buldog</option>
                                        <option value="9"> Američki koker španijel</option>
                                        <option value="10"> Američki lisičar</option>
                                        <option value="11"> Američki pit bul terijer</option>
                                        <option value="12"> Američki stafordski terijer</option>
                                        <option value="13"> Američki španijel za vodu</option>
                                        <option value="14">  Anadolski pastirski pas</option>
                                        <option value="15">  Arapski hrt - slugi</option>
                                        <option value="16">    Argentinski pas </option>
                                        <option value="17">  Ardenski govedar</option>
                                        <option value="18">  Ariješki gonič </option>
                                        <option value="19">   Ariješki ptičar </option>
                                        <option value="20">    Artezijsko Normanski baset </option>
                                        <option value="21">    Artoaški gonič (28)
                                        <option value="22">     Atlaski pastirski pas Aidi </option>
                                        <option value="23">Australijski govedar </option>
                                        <option value="24">     Australijski dingo</option>
                                        <option value="25"> Australijski ovčar </option>
                                        <option value="26">      Australijski terijer </option>
                                        <option value="27">       Austrijski ravnodlaki gonič </option>
                                        <option value="28">Bavarski planinski krvoslednik </option>
                                        <option value="29">Barak </option>
                                        <option value="30"> Barbe </option>
                                        <option value="31"> Basendži </option>
                                        <option value="32"> Baset </option>
                                        <option value="33"> Bedlington terijer </option>
                                        <option value="34">Belgijski grifon </option>
                                        <option value="35"> Belgijski ovčar </option>
                                        <option value="36">Grenendal</option>
                                        <option value="37">Lakenoa</option>
                                        <option value="38">Malinoa</option>
                                        <option value="39">Terviren</option>
                                        <option value="40"> Beli švajcarski ovčar </option>
                                        <option value="41"> Bergamski pastirski pas </option>
                                        <option value="42"> Bernardinac </option>
                                        <option value="43"> Bernski pastirski pas </option>
                                        <option value="44"Bigl zečar </option>
                                        <option value="45"Bigl </option>
                                        <option value="46" Bobtejl </option>
                                        <option value="47" Bojkin španijel</option>
                                        <option value="48"Bokser </option>
                                        <option value="49" Bolonjski pas </option>
                                        <option value="50" Border koli </option>
                                        <option value="51"  Border terijer </option>
                                        <option value="52"  Bordoška doga </option>
                                        <option value="53"  Bosanski tornjak </option>
                                        <option value="54"  Boseron </option>
                                        <option value="55"  Bostonski terijer </option>
                                        <option value="56"  Bradati koli </option>
                                        <option value="57"  Brazilski pas </option>
                                        <option value="58"  Brazilski terijer </option>
                                        <option value="60"  Bretanjski riđi baset </option>
                                        <option value="61">Briješki ovčar </option>
                                        <option value="62">Bul terijer </option>
                                        <option value="63">Buldog </option>
                                        <option value="64">Bulmastif </option>
                                        <option value="65">Burbonski ptičar </option>
                                        <option value="66">Burgoški jarebičar </option>
                                        <option value="67">Vajmarski ptičar </option>
                                        <option value="68">Veliki vendejski grifon </option>
                                        <option value="69">Veliki gaskonjsko sentanžujski gonič </option>
                                        <option value="70">Veliki engleski hrt - grejhund </option>
                                        <option value="71">Veliki englesko-francuski belo oranž gonič </option>
                                        <option value="72"> Veliki englesko-francuski belo crni gonič </option>
                                        <option value="73"> Veliki englesko-francuski gonič </option>
                                        <option value="74"> Veliki minsterlendski ptičar </option>
                                        <option value="75">  Veliki oštrodlaki vendejski baset </option>
                                        <option value="76">  Veliki plavi gaskonjski gonič </option>
                                        <option value="77">  Veliki švajcarski pastirski pas </option>
                                        <option value="78">  Veliki šnaucer </option>
                                        <option value="79">  Velški korgi kardigan </option>
                                        <option value="80"> Velški korgi pembrok </option>
                                        <option value="81">  Velški terijer </option>
                                        <option value="82">  Velški špringer španijel </option>
                                        <option value="83">  Vendejski oštrodlaki gonič </option>
                                        <option value="84">   Vestfalski brak jazavičar </option>
                                        <option value="85">    Gonič rakuna </option>
                                        <option value="86">    Gordon seter </option>
                                        <option value="87">    Grenlandski pas </option>
                                        <option value="88">    Grčki gonič </option>
                                        <option value="89">   Dalmatinac </option>
                                        <option value="90">   Dandi dinmont terijer </option>
                                        <option value="91">   Danski pas </option>
                                        <option value="92">   Doberman </option>
                                        <option value="93">   Drever </option>
                                        <option value="94">   Drentski ptičar </option>
                                        <option value="95">   Dugodlaki škotski ovčar </option>
                                        <option value="96">   Dunkerov gonič </option>
                                        <option value="97">   Engleski koker španijel </option>
                                        <option value="98">   Engleski lisičar </option>
                                        <option value="99">  Engleski mastif</option>
                                        <option value="100">   Engleski ovčar</option>
                                        <option value="101">   Engleski seter </option>
                                        <option value="102">   Engleski springer španijel </option>
                                        <option value="103">   Engleski patuljasti terijer </option>
                                        <option value="104">   Entleburški pastirski pas </option>
                                        <option value="105">    Epanjel breton </option>
                                        <option value="106"> Erdel terijer </option>
                                        <option value="107">    Erdeljski gonič </option>
                                        <option value="108"> Estrelski pastirski pas </option>
                                        <option value="109"> Eurasier </option>
                                        <option value="110"> Zapadno sibirska lajka </option>
                                        <option value="111"> Zapadno škotski beli terijer </option>
                                        <option value="112"> Zlatni retriver </option>
                                        <option value="113"> Ibizki hrt </option>
                                        <option value="114">  Izraelski ovčar </option>
                                        <option value="115">Imalski terijer </option>
                                        <option value="116"> Irski vučji hrt </option>
                                        <option value="117"> Irski seter crveni </option>
                                        <option value="118"> Irski terijer </option>
                                        <option value="119">Irski crveno-beli seter </option>
                                        <option value="120">Irski španijel za vodu </option>
                                        <option value="121">Islandski ovčar </option>
                                        <option value="122"> Istarski kratkodlaki gonič </option>
                                        <option value="123"> Istarski ovčar</option>
                                        <option value="124"> Istarski oštrodlaki gonič </option>
                                        <option value="125">  Istočno sibirska lajka </option>
                                        <option value="126">  Italijanski volpino </option>
                                        <option value="127">  Italijanski gonič - kratkodlaki </option>
                                        <option value="128">   Italijanski gonič - oštrodlaki </option>
                                        <option value="129">   Italijanski kratkodlaki ptičar </option>
                                        <option value="130">   Italijanski spinon </option>
                                        <option value="131"> Jazavičar </option>
                                        <option value="132">  Japanski borac </option>
                                        <option value="133"> Japanski terijer </option>
                                        <option value="134">  Japanski čin </option>
                                        <option value="135">  Japanski špic </option>
                                        <option value="136">  Jemtlandski pas </option>
                                        <option value="137">   Jorkšir terijer </option>
                                        <option value="138">   Južnoruski ovčar </option>
                                        <option value="139">   Kavkaski ovčar </option>
                                        <option value="140">   Kanarski pas </option>
                                        <option value="141"> Kane korso </option>
                                        <option value="142"> Karelijski gonič medveda </option>
                                        <option value="143">  Katalonski ovčar </option>
                                        <option value="144">  Kelpi </option>
                                        <option value="145"> Keri blu terijer </option>
                                        <option value="146">  King Čarls španijel </option>
                                        <option value="147">   Klamber španijel </option>
                                        <option value="148"> Kovrdžavi bišon </option>
                                        <option value="149"> Komondor </option>
                                        <option value="150"> Kortalsov grifon </option>
                                        <option value="151"> Kratkodlaki škotski ovčar </option>
                                        <option value="152"> Kromfolender </option>
                                        <option value="153">  Kuvas </option>
                                        <option value="154"> Labrador retriver </option>
                                        <option value="155"> Lagoto romanjolo </option>
                                        <option value="156">  Landsir </option>
                                        <option value="157">Laponski pas </option>
                                        <option value="158"> Laponski pastirski pas </option>
                                        <option value="159">Laponski špic </option>
                                        <option value="160"> Lasa apso </option>
                                        <option value="161">Lejklandski terijer </option>
                                        <option value="162"> Leonberger </option>
                                        <option value="163"> Mađarska vižla kratkodlaka </option>
                                        <option value="164"> Mađarska vižla oštrodlaka </option>
                                        <option value="165">  Mađarski agar </option>
                                        <option value="166"> Majmunski pinč </option>
                                        <option value="167">Majorški čuvar </option>
                                        <option value="168"> Malamut </option>
                                        <option value="169"> Mali engleski hrt </option>
                                        <option value="170">  Mali englesko-francuski mat gonič </option>
                                        <option value="171"> Mali italijanski hrt </option>
                                        <option value="172">  Mali lavlji pas </option>
                                        <option value="173">  Mali minsterlender </option>
                                        <option value="174">  Mali oštrodlaki Vendejski baset </option>
                                        <option value="175">  Mali holandski pas za lov ptica na vodi </option>
                                        <option value="176">  Maltezer </option>
                                        <option value="177">  Mančester terijer toj</option>
                                        <option value="178">   Mančester terijer </option>
                                        <option value="179">  Maremano Abruceški pastirski pas </option>
                                        <option value="180">  Mekodlaki pšenično žuti terijer </option>
                                        <option value="181">  Meksički golokoži pas </option>
                                        <option value="182">  Minijaturni bul terijer</option>
                                        <option value="183">   Mops </option>
                                        <option value="184">   Mudi </option>
                                        <option value="185">  Nemačka doga </option>
                                        <option value="186">  Nemački gonič </option>
                                        <option value="187">  Nemački dugodlaki ptičar </option>
                                        <option value="188">  Nemački kratkodlaki ptičar </option>
                                        <option value="189">  Nemački lovni terijer </option>
                                        <option value="190">  Nemački prepeličar </option>
                                        <option value="191">  Nemački ovčar </option>
                                        <option value="192">  Nemački oštrodlaki ptičar </option>
                                        <option value="193">   Nemački oštrodlaki ptičar </option>
                                        <option value="194">   Nemački špic </option>
                                        <option value="195">   Nivernejski oštrodlaki gonič </option>
                                        <option value="196">   Njufaunlend </option>
                                        <option value="197">   Overnejski ptičar </option>
                                        <option value="198">   Pas svetog Huberta - blodhund </option>
                                        <option value="199">   Pastirski pas iz Laboreira </option>
                                        <option value="200">   Patuljasti kontinental epanjel </option>
                                        <option value="201">   Patuljasti pinč </option>
                                        <option value="202">   Patuljasti šnaucer </option>
                                        <option value="203">   Pekinezer </option>
                                        <option value="204">   Pikardijski epanjel </option>
                                        <option value="205">   Pikardijski ovčar </option>
                                        <option value="206">   Pinč </option>
                                        <option value="207">   Pirinejski mastif </option>
                                        <option value="208">   Pirinejski ovčar duge dlake </option>
                                        <option value="209">   Pirinejski ovčar kratke dlake </option>
                                        <option value="210">   Pirinejski planinski pas </option>
                                        <option value="211">   Plavi gaskonjski gonič </option>
                                        <option value="212">   Plavi oštrodlaki gaskonjski gonič </option>
                                        <option value="213">   Plavi pikardijski epanjel </option>
                                        <option value="214">   Podhalanski ovčar </option>
                                        <option value="215">   Poenter </option>
                                        <option value="216">    Poljski ravničarski ovčar </option>
                                        <option value="217">    Poljski španijel </option>
                                        <option value="218">     Pont Odmerški epanjel </option>
                                        <option value="219">     Portugalski jarebičar </option>
                                        <option value="220">     Portugalski pas za vodu </option>
                                        <option value="221">     Posavski gonič </option>
                                        <option value="222">     Pudla </option>
                                        <option value="223">     Puli </option>
                                        <option value="224">     Pulin</option>
                                        <option value="225">     Pumi </option>
                                        <option value="226">     Ravnodlaki retriver </option>
                                        <option value="227">    Rat terijer</option>
                                        <option value="228">    Riđi bretanjski gonič </option>
                                        <option value="229">   Rodezijski ridžbek </option>
                                        <option value="230">    Rotvajler </option>
                                        <option value="231">  Ruski toj terijer</option>
                                        <option value="232"> Ruski hrt — Barzoj </option>
                                        <option value="233"> Rusko-evropska lajka </option>
                                        <option value="234"> Saluki </option>
                                        <option value="235"> Samojed </option>
                                        <option value="236"> Sarloški vučji pas </option>
                                        <option value="237"> Saseks španijel </option>
                                        <option value="238">  Senžermenski ptičar </option>
                                        <option value="239">  Sibirski haski </option>
                                        <option value="240">   Silihem terijer </option>
                                        <option value="241">   Silki terijer </option>
                                        <option value="242">  Skaj terijer </option>
                                        <option value="243"> Slovački gonič </option>
                                        <option value="244"> Slovački pastirski pas </option>
                                        <option value="245"> Smolondski gonič </option>
                                        <option value="246">  Srednjeazijski ovčar </option>
                                        <option value="247"> Srpski gonič </option>
                                        <option value="248"> Srpski odbrambeni pas</option>
                                        <option value="249"> Srpski trobojni gonič </option>
                                        <option value="250"> Stafordski bul terijer </option>
                                        <option value="251">Tajlandski ridžbek </option>
                                        <option value="252"> Tibetski mastif </option>
                                        <option value="253"> Tibetski terijer </option>
                                        <option value="254"> Tibetski španijel </option>
                                        <option value="255"> Tirolski gonič </option>
                                        <option value="256">  Toling retriver </option>
                                        <option value="257">  Tulearski pas </option>
                                        <option value="258">  Faraonski pas </option>
                                        <option value="259"> Finski gonič </option>
                                        <option value="260"> Finski špic </option>
                                        <option value="261"> Flandrijski govedar </option>
                                        <option value="262"> Foks terijer </option>
                                        <option value="263">  Foks terijer kratkodlaki</option>
                                        <option value="264">  Foks terijer minijaturni</option>
                                        <option value="265">   Foks terijer oštrodlaki </option>
                                        <option value="266">   Foks terijer toj</option>
                                        <option value="267">   Francuski belo-oranž gonič </option>
                                        <option value="268">   Francuski belo-crni gonič </option>
                                        <option value="269">   Francuski buldog </option>
                                        <option value="270">   Francuski epanjel </option>
                                        <option value="271">  Francuski ptičar gaskonjski tip </option>
                                        <option value="272">  Francuski ptičar pirinejski tip </option>
                                        <option value="273">  Francuski trobojni gonič </option>
                                        <option value="274">  Frizijski ptičar </option>
                                        <option value="275">  Frizijski španijel </option>
                                        <option value="276">  Havanski bišon </option>
                                        <option value="277"> Hamiltonov gonič </option>
                                        <option value="278"> Hanoverski krvoslednik </option>
                                        <option value="279"> Harijer </option>
                                        <option value="280">  Higenov gonič </option>
                                        <option value="281">   Hovavart </option>
                                        <option value="282">  Hokaido </option>
                                        <option value="283">  Holandski kovrdžavi ovčar </option>
                                        <option value="284"> Holandski ovčar </option>
                                        <option value="285"> Holandski pinč </option>
                                        <option value="286"> Holdenski gonič </option>
                                        <option value="287"> Hrvatski ovčar </option>
                                        <option value="288"> Crni terijer </option>
                                        <option value="289"> Crnogorski planinski gonič </option>
                                        <option value="290">Čau čau </option>
                                        <option value="291"> Češki fousek </option>
                                        <option value="292"> Čivava </option>
                                        <option value="293"> Čizopik retriver </option>
                                        <option value="294"> Džek Raselov terijer</option>
                                        <option value="295"> Šar-pej </option>
                                        <option value="296"> Šarplaninac </option>
                                        <option value="297">  Švajcarski gonič </option>
                                        <option value="298"> Bernski gonič</option>
                                        <option value="299"> Jurski gonič</option>
                                        <option value="300">  Lucernski gonič</option>
                                        <option value="301">  Švajcarski gonič</option>
                                        <option value="302">  Niskonogi švajcarski gonič </option>
                                        <option value="303">  Bernski niskonogi gonič</option>
                                        <option value="304"> Jurski niskonogi gonič</option>
                                        <option value="305"> Lucernski niskonogi gonič</option>
                                        <option value="306"> Švajcarski niskonogi gonič</option>
                                        <option value="307"> Švedski brak jazavičar </option>
                                        <option value="308"> Švedski ovčarski špic </option>
                                        <option value="309"> Šetlandski ovčar </option>
                                        <option value="310">  Ši cu </option>
                                        <option value="311">  Šiba </option>
                                        <option value="312">  Šikoku </option>
                                        <option value="313">  Šilerov gonič </option>
                                        <option value="314">  Šipeki </option>
                                        <option value="315">  Škotski jelenji hrt </option>
                                        <option value="316">  Škotski terijer </option>
                                        <option value="317">  Šnaucer </option>
                                        <option value="318">   Španski brdski gonič </option>
                                        <option value="319">  Španski mastif </option>
                                        <option value="320">  Španski pas za vodu </option>
                                        <option value="321">   Štajerski oštrodlaki gonič </option>


                                    </select>

                                    @if ($errors->has('dogbreed'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('dogbreed') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="sex" class="col-md-4 control-label">Pol psa</label>

                                <div class="col-md-6">
                                    <label style="margin-left: 50px">Muški</label>
                                    <input id="sex" name="sex" type="radio" value="male" required autofocus>
                                    <label style="margin-left: 100px">Ženski</label>
                                    <input id="sex" name="sex" type="radio" value="female" required autofocus>

                                    @if ($errors->has('sex'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Dodaj psa') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



