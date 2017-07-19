<?php /* Smarty version Smarty-3.1.19, created on 2017-01-23 13:17:33
         compiled from "C:\wamp64\www\mshop\modules\gestionfournisseur\views\templates\front\displaysave.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316055885f45d58f2b8-69186356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ffb91881c1e6da0507f8e93865235b46f0c8e01' => 
    array (
      0 => 'C:\\wamp64\\www\\mshop\\modules\\gestionfournisseur\\views\\templates\\front\\displaysave.tpl',
      1 => 1485165991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316055885f45d58f2b8-69186356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'link_save_fournisseur' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5885f45d5b8703_06293347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885f45d5b8703_06293347')) {function content_5885f45d5b8703_06293347($_smarty_tpl) {?><div class="toto">
	<h2> Veuillez entrer les informations sur vous et votre activité </h2>
</div>


<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
 <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php } ?>
<br>

<form action="<?php echo $_smarty_tpl->tpl_vars['link_save_fournisseur']->value;?>
" method="post" id="" class="box">

	<div class="form_content clearfix">
		<div class="form-group required">
			<label for="name" class="required">Nom</label>
			<input class="is_required validate account_input form-control" data-validate="isName" type="text" id="name" name="firstname" value="">
		</div>

		<div class="form-group">
			<label for="lastname">Prenom</label>
			<input class="is_required validate account_input form-control " data-validate="isName" type="text" id="lastname" name="lastname" value="">
		</div>

		<div class="form-group required">
			<label for="email">Email address</label>
			<input class="is_required validate account_input form-control" data-validate="isEmail" type="email" id="email" name="email" value="">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input class="is_required validate account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="password" value="">
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="is_required validate account_textarea form-control" id="description" name="description"
                      value="" placeholder="Entrer la description de votre service"></textarea>
		</div>
        <div class="form-group">

            <label class="control-label required">
                <span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="
					Numéro de téléphone de ce fournisseur">
                    Téléphone
                </span>
            </label class="control-label">
            <div>
                <input type="text" name="phone" id="phone" value="" class="is_required validate account_input form-control" maxlength="16">
            </div>

        </div>
        <div class="form-group">

            <label class="control-label required">
                Adresse
            </label>



            <div>

                <input type="text" name="address" id="address" value="" class="is_required validate account_input form-control" maxlength="128" required="required">




            </div>

        </div>
        <div class="form-group">

            <label class="control-label">
                Code postal
            </label>



            <div>

                <input type="text" name="postcode" id="postcode" value="" class="" maxlength="12">




            </div>

        </div>
        <div class="form-group">

            <label class="control-label required">
                Ville
            </label>



            <div>

                <input type="text" name="city" id="city" value="" class="is_required validate account_input form-control" maxlength="32" required="required">




            </div>

        </div>
		<div class="form-group">
			<label for="country">Country</label>
            <select name="country"  id="country" class="control-label">
                <option value="231">Afghanistan</option>

                <option value="30">Afrique du Sud</option>

                <option value="244">Åland, Îles</option>

                <option value="230">Albanie</option>

                <option value="38">Algérie</option>

                <option value="1">Allemagne</option>

                <option value="40">Andorre</option>

                <option value="41">Angola</option>

                <option value="42">Anguilla</option>

                <option value="232">Antarctique</option>

                <option value="43">Antigua et Barbuda</option>

                <option value="157">Antilles Néerlandaises</option>

                <option value="188">Arabie Saoudite</option>

                <option value="44">Argentine</option>

                <option value="45">Arménie</option>

                <option value="46">Aruba</option>

                <option value="24">Australie</option>

                <option value="2">Autriche</option>

                <option value="47">Azerbaïdjan</option>

                <option value="48">Bahamas</option>

                <option value="49">Bahreïn</option>

                <option value="50">Bangladesh</option>

                <option value="51">Barbade</option>

                <option value="52">Bélarus</option>

                <option value="3">Belgique</option>

                <option value="53">Belize</option>

                <option value="54">Bénin</option>

                <option value="55">Bermudes</option>

                <option value="56">Bhoutan</option>

                <option value="34">Bolivie</option>

                <option value="233">Bosnie-Herzégovine</option>

                <option value="57">Botswana</option>

                <option value="234">Bouvet, Île</option>

                <option value="58">Brésil</option>

                <option value="59">Brunéi Darussalam</option>

                <option value="236">Bulgarie</option>

                <option value="60">Burkina Faso</option>

                <option value="61">Burma (Myanmar)</option>

                <option value="62">Burundi</option>

                <option value="237">Caïmans, Îles</option>

                <option value="63">Cambodge</option>

                <option value="64" selected="selected">Cameroun</option>

                <option value="4">Canada</option>

                <option value="65">Cap-Vert</option>

                <option value="66">Centrafricaine, République</option>

                <option value="68">Chili</option>

                <option value="5">Chine</option>

                <option value="238">Christmas, Île</option>

                <option value="76">Chypre</option>

                <option value="239">Cocos (Keeling), Îles</option>

                <option value="69">Colombie</option>

                <option value="70">Comores</option>

                <option value="72">Congo, Rép.</option>

                <option value="71">Congo, Rép. Dém.</option>

                <option value="240">Cook, Îles</option>

                <option value="28">Corée du Sud</option>

                <option value="121">Corée, Rép. Populaire Dém. de</option>

                <option value="73">Costa Rica</option>

                <option value="32">Côte d'Ivoire</option>

                <option value="74">Croatie</option>

                <option value="75">Cuba</option>

                <option value="20">Danemark</option>

                <option value="77">Djibouti</option>

                <option value="78">Dominica</option>

                <option value="82">Égypte</option>

                <option value="83">El Salvador</option>

                <option value="217">Émirats Arabes Unis</option>

                <option value="81">Équateur</option>

                <option value="85">Érythrée</option>

                <option value="6">Espagne</option>

                <option value="86">Estonie</option>

                <option value="21">États-Unis</option>

                <option value="87">Éthiopie</option>

                <option value="88">Falkland, Îles</option>

                <option value="89">Féroé, Îles</option>

                <option value="90">Fidji</option>

                <option value="7">Finlande</option>

                <option value="8">France</option>

                <option value="91">Gabon</option>

                <option value="92">Gambie</option>

                <option value="93">Géorgie</option>

                <option value="196">Géorgie du Sud et les Îles Sandwich du Sud</option>

                <option value="94">Ghana</option>

                <option value="97">Gibraltar</option>

                <option value="9">Grèce</option>

                <option value="95">Grenade</option>

                <option value="96">Groenland</option>

                <option value="98">Guadeloupe</option>

                <option value="99">Guam</option>

                <option value="100">Guatemala</option>

                <option value="101">Guernesey</option>

                <option value="102">Guinée</option>

                <option value="84">Guinée Équatoriale</option>

                <option value="103">Guinée-Bissau</option>

                <option value="104">Guyana</option>

                <option value="241">Guyane Française</option>

                <option value="105">Haîti</option>

                <option value="106">Heard, Île et Mcdonald, Îles</option>

                <option value="108">Honduras</option>

                <option value="22">Hong-Kong</option>

                <option value="143">Hongrie</option>

                <option value="35">Ile Maurice</option>

                <option value="223">Îles Vierges Britanniques</option>

                <option value="224">Îles Vierges des États-Unis</option>

                <option value="110">Inde</option>

                <option value="111">Indonésie</option>

                <option value="112">Iran</option>

                <option value="113">Iraq</option>

                <option value="26">Irlande</option>

                <option value="109">Islande</option>

                <option value="29">Israël</option>

                <option value="10">Italie</option>

                <option value="115">Jamaique</option>

                <option value="11">Japon</option>

                <option value="116">Jersey</option>

                <option value="117">Jordanie</option>

                <option value="118">Kazakhstan</option>

                <option value="119">Kenya</option>

                <option value="123">Kirghizistan</option>

                <option value="120">Kiribati</option>

                <option value="122">Koweït</option>

                <option value="124">Laos</option>

                <option value="127">Lesotho</option>

                <option value="125">Lettonie</option>

                <option value="126">Liban</option>

                <option value="128">Libéria</option>

                <option value="129">Libyenne, Jamahiriya Arabe</option>

                <option value="130">Liechtenstein</option>

                <option value="131">Lituanie</option>

                <option value="12">Luxembourg</option>

                <option value="132">Macao</option>

                <option value="133">Macédoine</option>

                <option value="134">Madagascar</option>

                <option value="136">Malaisie</option>

                <option value="135">Malawi</option>

                <option value="137">Maldives</option>

                <option value="138">Mali</option>

                <option value="139">Malte</option>

                <option value="114">Man, Île de</option>

                <option value="163">Mariannes du Nord, Îles</option>

                <option value="152">Maroc</option>

                <option value="140">Marshall, Îles</option>

                <option value="141">Martinique</option>

                <option value="142">Mauritanie</option>

                <option value="144">Mayotte</option>

                <option value="145">Mexique</option>

                <option value="146">Micronésie</option>

                <option value="147">Moldova</option>

                <option value="148">Monaco</option>

                <option value="149">Mongolie</option>

                <option value="150">Monténégro</option>

                <option value="151">Montserrat</option>

                <option value="153">Mozambique</option>

                <option value="154">Namibie</option>

                <option value="155">Nauru</option>

                <option value="156">Népal</option>

                <option value="159">Nicaragua</option>

                <option value="160">Niger</option>

                <option value="31">Nigeria</option>

                <option value="161">Niué</option>

                <option value="162">Norfolk, Île</option>

                <option value="23">Norvège</option>

                <option value="158">Nouvelle-Calédonie</option>

                <option value="27">Nouvelle-Zélande</option>

                <option value="235">Océan Indien, Territoire Britannique de L'</option>

                <option value="164">Oman</option>

                <option value="215">Ouganda</option>

                <option value="219">Ouzbékistan</option>

                <option value="165">Pakistan</option>

                <option value="166">Palaos</option>

                <option value="167">Palestinien Occupé, Territoire</option>

                <option value="168">Panama</option>

                <option value="169">Papouasie-Nouvelle-Guinée</option>

                <option value="170">Paraguay</option>

                <option value="13">Pays-bas</option>

                <option value="171">Pérou</option>

                <option value="172">Philippines</option>

                <option value="173">Pitcairn</option>

                <option value="14">Pologne</option>

                <option value="242">Polynésie Française</option>

                <option value="174">Porto Rico</option>

                <option value="15">Portugal</option>

                <option value="175">Qatar</option>

                <option value="79">République Dominicaine</option>

                <option value="16">République Tchèque</option>

                <option value="176">Réunion, Île de la</option>

                <option value="36">Roumanie</option>

                <option value="17">Royaume-Uni</option>

                <option value="177">Russie, Fédération de</option>

                <option value="178">Rwanda</option>

                <option value="226">Sahara Occidental</option>

                <option value="179">Saint-Barthélemy</option>

                <option value="180">Saint-Kitts-et-Nevis</option>

                <option value="186">Saint-Marin</option>

                <option value="182">Saint-Martin</option>

                <option value="183">Saint-Pierre-et-Miquelon</option>

                <option value="107">Saint-Siege (État de la Cité du Vatican)</option>

                <option value="184">Saint-Vincent-et-Les Grenadines</option>

                <option value="181">Sainte-Lucie</option>

                <option value="194">Salomon, Îles</option>

                <option value="185">Samoa</option>

                <option value="39">Samoa Américaines</option>

                <option value="187">Sao Tomé-et-Principe</option>

                <option value="189">Sénégal</option>

                <option value="190">Serbie</option>

                <option value="191">Seychelles</option>

                <option value="192">Sierra Leone</option>

                <option value="25">Singapour</option>

                <option value="37">Slovaquie</option>

                <option value="193">Slovénie</option>

                <option value="195">Somalie</option>

                <option value="198">Soudan</option>

                <option value="197">Sri Lanka</option>

                <option value="18">Suède</option>

                <option value="19">Suisse</option>

                <option value="199">Suriname</option>

                <option value="200">Svalbard et Île Jan Mayen</option>

                <option value="201">Swaziland</option>

                <option value="202">Syrienne</option>

                <option value="204">Tadjikistan</option>

                <option value="203">Taïwan</option>

                <option value="205">Tanzanie</option>

                <option value="67">Tchad</option>

                <option value="243">Terres Australes Françaises</option>

                <option value="206">Thaïlande</option>

                <option value="80">Timor oriental</option>

                <option value="33">Togo</option>

                <option value="207">Tokelau</option>

                <option value="208">Tonga</option>

                <option value="209">Trinité-et-Tobago</option>

                <option value="210">Tunisie</option>

                <option value="212">Turkménistan</option>

                <option value="213">Turks et Caiques, Îles</option>

                <option value="211">Turquie</option>

                <option value="214">Tuvalu</option>

                <option value="216">Ukraine</option>

                <option value="218">Uruguay</option>

                <option value="220">Vanuatu</option>

                <option value="221">Venezuela</option>

                <option value="222">Vietnam</option>

                <option value="225">Wallis et Futuna</option>

                <option value="227">Yémen</option>

                <option value="228">Zambie</option>

                <option value="229">Zimbabwe</option>

            </select>
        </div>

		<p class="submit ">
			<input type="hidden" class="hidden" name="back" value="my-account">						<button type="submit" id="SubmitLogin" name="SubmitLogin" class="button btn btn-default button-medium pull-rigth">
				<span>
					<i class="icon-lock left"></i>
					Soumettre
				</span>
			</button>
		</p>
	</div>
</form>

<?php }} ?>
