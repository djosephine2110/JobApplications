@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Work details</h2>


    <form action="/asing" method='POST'>
        @csrf

        <div class="form-group col-md-6">
            <label for="language">Bahasa </label>
            <select id="inputState" class="form-control" name="language">
              <option value="">Choose...</option>
              <option value="Abkhazian">Abkhazian</option>
            <option value="Afar">Afar</option>
            <option value="Afrikaans">Afrikaans</option>
            <option value="Akan">Akan</option>
            <option value="Albanian">Albanian</option>
            <option value="Amharic">Amharic</option>
            <option value="Arabic">Arabic</option>
            <option value="Aragonese">Aragonese</option>
            <option value="Armenian">Armenian</option>
            <option value="Assamese">Assamese</option>
            <option value="Avaric">Avaric</option>
            <option value="Avestan">Avestan</option>
            <option value="Aymara">Aymara</option>
            <option value="Azerbaijani">Azerbaijani</option>
            <option value="Bambara">Bambara</option>
            <option value="Bashkir">Bashkir</option>
            <option value="Basque">Basque</option>
            <option value="Belarusian">Belarusian</option>
            <option value="Bengali (Bangla)">Bengali (Bangla)</option>
            <option value="Bihari">Bihari</option>
            <option value="Bislama">Bislama</option>
            <option value="Bosnian">Bosnian</option>
            <option value="Breton">Breton</option>
            <option value="Bulgarian">Bulgarian</option>
            <option value="Burmese">Burmese</option>
            <option value="Catalan">Catalan</option>
            <option value="Chamorro">Chamorro</option>
            <option value="Chechen">Chechen</option>
            <option value="Chichewa, Chewa, Nyanja">Chichewa, Chewa, Nyanja</option>
            <option value="Chinese">Chinese</option>
            <option value="Chinese (Simplified)">Chinese (Simplified)</option>
            <option value="Chinese (Traditional)">Chinese (Traditional)</option>
            <option value="Chuvash">Chuvash</option>
            <option value="Cornish">Cornish</option>
            <option value="Corsican">Corsican</option>
            <option value="Cree">Cree</option>
            <option value="Croatian">Croatian</option>
            <option value="Czech">Czech</option>
            <option value="Danish">Danish</option>
            <option value="Divehi, Dhivehi, Maldivian">Divehi, Dhivehi, Maldivian</option>
            <option value="Dutch">Dutch</option>
            <option value="English">English</option>
            <option value="Esperanto">Esperanto</option>
            <option value="Estonian">Estonian</option>
            <option value="Ewe">Ewe</option>
            <option value="Faroese">Faroese</option>
            <option value="Fijian">Fijian</option>
            <option value="Finnish">Finnish</option>
            <option value="French">French</option>
            <option value="Fula, Fulah, Pulaar, Pular">Fula, Fulah, Pulaar, Pular</option>
            <option value="Galician">Galician</option>
            <option value="Gaelic (Scottish)">Gaelic (Scottish)</option>
            <option value="Gaelic (Manx)">Gaelic (Manx)</option>
            <option value="Georgian">Georgian</option>
            <option value="German">German</option>
            <option value="Greek">Greek</option>
            <option value="Greenlandic">Greenlandic</option>
            <option value="Guarani">Guarani</option>
            <option value="Gujarati">Gujarati</option>
            <option value="Haitian Creole">Haitian Creole</option>
            <option value="Hausa">Hausa</option>
            <option value="Hebrew">Hebrew</option>
            <option value="Herero">Herero</option>
            <option value="Hindi">Hindi</option>
            <option value="Hiri Motu">Hiri Motu</option>
            <option value="Hungarian">Hungarian</option>
            <option value="Icelandic">Icelandic</option>
            <option value="Ido">Ido</option>
            <option value="Igbo">Igbo</option>
            <option value="Indonesian">Indonesian</option>
            <option value="Interlingua">Interlingua</option>
            <option value="Interlingue">Interlingue</option>
            <option value="Inuktitut">Inuktitut</option>
            <option value="Inupiak">Inupiak</option>
            <option value="Irish">Irish</option>
            <option value="Italian">Italian</option>
            <option value="Japanese">Japanese</option>
            <option value="Javanese">Javanese</option>
            <option value="Kalaallisut, Greenlandic">Kalaallisut, Greenlandic</option>
            <option value="Kannada">Kannada</option>
            <option value="Kanuri">Kanuri</option>
            <option value="Kashmiri">Kashmiri</option>
            <option value="Kazakh">Kazakh</option>
            <option value="Khmer">Khmer</option>
            <option value="Kikuyu">Kikuyu</option>
            <option value="Kinyarwanda (Rwanda)">Kinyarwanda (Rwanda)</option>
            <option value="Kirundi">Kirundi</option>
            <option value="Kyrgyz">Kyrgyz</option>
            <option value="Komi">Komi</option>
            <option value="Kongo">Kongo</option>
            <option value="Korean">Korean</option>
            <option value="Kurdish">Kurdish</option>
            <option value="Kwanyama">Kwanyama</option>
            <option value="Lao">Lao</option>
            <option value="Latin">Latin</option>
            <option value="Latvian (Lettish)">Latvian (Lettish)</option>
            <option value="Limburgish ( Limburger)">Limburgish ( Limburger)</option>
            <option value="Lingala">Lingala</option>
            <option value="Lithuanian	">Latvian</option>
            <option value="Luga-Katanga">Luga-Katanga</option>
            <option value="Luganda, Ganda">Luganda, Ganda</option>
            <option value="Luxembourgish">Luxembourgish</option>
            <option value="Manx">Manx</option>
            <option value="Macedonian">Macedonian</option>
            <option value="Malagasy">Malagasy</option>
            <option value="Malay">Malay</option>
            <option value="Malayalam">Malayalam</option>
            <option value="Maltese">Maltese</option>
            <option value="Maori">Maori</option>
            <option value="Marathi">Marathi</option>
            <option value="Marshallese">Marshallese</option>
            <option value="Moldavian">Moldavian</option>
            <option value="Mongolian">Mongolian</option>
            <option value="Nauru">Nauru</option>
            <option value="Navajo">Navajo</option>
            <option value="Ndonga">Ndonga</option>
            <option value="Northern Ndebele">Northern Ndebele</option>
            <option value="Nepali">Nepali</option>
            <option value="Norwegian">Norwegian</option>
            <option value="Norwegian bokmål">Norwegian bokmål</option>
            <option value="Norwegian nynorsk">Norwegian nynorsk</option>
            <option value="Nuosu">Nuosu</option>
            <option value="Occitan">Occitan</option>
            <option value="Ojibwe">Ojibwe</option>
            <option value="Old Church Slavonic, Old Bulgarian">Old Church Slavonic, Old Bulgarian</option>
            <option value="Oriya">Oriya</option>
            <option value="Oromo (Afaan Oromo)">Oromo (Afaan Oromo)</option>
            <option value="Ossetian">Ossetian</option>
            <option value="Pāli">Pāli</option>
            <option value="Pashto, Pushto">Pashto, Pushto</option>
            <option value="Persian (Farsi)">Persian (Farsi)</option>
            <option value="Polish">Polish</option>
            <option value="Portuguese">Portuguese</option>
            <option value="Punjabi (Eastern)">Punjabi (Eastern)</option>
            <option value="Quechua">Quechua</option>
            <option value="Romansh">Romansh</option>
            <option value="Romanian">Romanian</option>
            <option value="Russian">Russian</option>
            <option value="Sami">Sami</option>
            <option value="Samoan">Samoan</option>
            <option value="Sango">Sango</option>
            <option value="Sanskrit">Sanskrit</option>
            <option value="Serbian">Serbian</option>
            <option value="Serbo-Croatian">Serbo-Croatian</option>
            <option value="Sesotho">Sesotho</option>
            <option value="Setswana">Setswana</option>
            <option value="Shona">Shona</option>
            <option value="Sichuan Yi">Sichuan Yi</option>
            <option value="Sindhi">Sindhi</option>
            <option value="Sinhalese">Sinhalese</option>
            <option value="Siswati">Siswati</option>
            <option value="Slovak">Slovak</option>
            <option value="Slovenian">Slovenian</option>
            <option value="Somali">Somali</option>
            <option value="Southern Ndebele">Southern Ndebele</option>
            <option value="Spanish">Spanish</option>
            <option value="Sundanese">Sundanese</option>
            <option value="Swahili (Kiswahili)">Swahili (Kiswahili)</option>
            <option value="Swati">Swati</option>
            <option value="Swedish">Swedish</option>
            <option value="Tagalog">Tagalog</option>
            <option value="Tahitian">Tahitian</option>
            <option value="Tajik">Tajik</option>
            <option value="Tamil">Tamil</option>
            <option value="Tatar">Tatar</option>
            <option value="Telugu">Telugu</option>
            <option value="Thai">Thai</option>
            <option value="Tibetan">Tibetan</option>
            <option value="Tigrinya">Tigrinya</option>
            <option value="Tonga">Tonga</option>
            <option value="Tsonga">Tsonga</option>
            <option value="Turkish">Turkish</option>
            <option value="Turkmen">Turkmen</option>
            <option value="Twi">Twi</option>
            <option value="Uyghur">Uyghur</option>
            <option value="Ukrainian">Ukrainian</option>
            <option value="Urdu">Urdu</option>
            <option value="Uzbek">Uzbek</option>
            <option value="Venda">Venda</option>
            <option value="Vietnamese">Vietnamese</option>
            <option value="Volapük">Volapük</option>
            <option value="Wallon">Wallon</option>
            <option value="Welsh">Welsh</option>
            <option value="Wolof">Wolof</option>
            <option value="Western Frisian">Western Frisian</option>
            <option value="Xhosa">Xhosa</option>
            <option value="Yiddish">Yiddish</option>
            <option value="Yoruba">Yoruba</option>
            <option value="Zhuang, Chuang">Zhuang, Chuang</option>
            <option value="Zulu">Zulu</option>
  
            </select>                
          </div>

          <div class="form-group col-md-6">
            <label for="speaking">Bicara </label>
            <select id="inputState" class="form-control" name="speaking">
              <option value="">Choose...</option>
              <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>
            <option value="Kurang">Kurang</option>
            
  
            </select>                
          </div>
          <div class="form-group col-md-6">
            <label for="reading">Membaca </label>
            <select id="inputState" class="form-control" name="reading">
              <option value="">Choose...</option>
              <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>
            <option value="Kurang">Kurang</option>
            
  
            </select>                
          </div>
          <div class="form-group col-md-6">
            <label for="writing">Menulis </label>
            <select id="inputState" class="form-control" name="writing">
              <option value="">Choose...</option>
              <option value="Baik">Baik</option>
            <option value="Cukup">Cukup</option>
            <option value="Kurang">Kurang</option>
            
  
            </select>                
          </div>

        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left:46%; margin-right:50%;">

    </form>

</div>


@endsection
