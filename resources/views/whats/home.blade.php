
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="d-inline-block card-header card-home" style="width: 100%;height: 100%;background-color: #fff;display: flex;flex-direction: column;align-items: center;justify-content: center;">                                    
                    <div class="row">
                        <div class="col-12 col-lg-4 col-md-4 col-sm-12 p-4 text-center">
                            <img style="position: relative;max-width: 200px;" src="{{ asset('imagens/logo.png') }}" alt="">
                        </div>    
                        <div class="col-12 col-lg-8 col-md-8 col-sm-12">                            
                            <div class="card-body">
                                <h5 class="card-title">Como enviar mensagem pelo WhatsApp
                                    sem salvar o contato no seu smartphone?</h5>
                                <p class="card-text">
                                    Basta usar esse recurso abaixo, escolher o código do país, colocar o DDD e o telefone do celular que seu destinatário utiliza no WhatsApp. Se estiver usando o celular o botão te levará para o aplicativo. Caso esteja no desktop (computador), abrirá a tela do WhatsApp Web.
                                </p>
                            </div>
                        </div>
                    </div>                
                </div>
                <form action="{{ route('enviar') }}" target="{{ isset($target) ? $target : '_self'}}" method="post">
                    <div class="row p-4 justify-content-center">
                        <h6 class="text-primary text-center">Enviar mensagem para:</h6>
                        <div class="col-lg-12 col-md-12 col-sm-12 mt-2 text-center">                            
                            <select class="col-8 ddi" id="ddi" name="ddi" is="ms-dropdown" required onchange="showMe(this)">  
                                <option data-image="./imagens/bands/br.png" selected value="55">BRASIL (+55)</option>
                                <option value=""></option>  
                                <option data-image="./imagens/bands/af.png" value="93">AFEGANISTAO (+93)</option>
                                <option data-image="./imagens/bands/za.png" value="27">AFRICA DO SUL (+27)</option>
                                <option data-image="./imagens/bands/al.png" value="355">ALBANIA (+355)</option>
                                <option data-image="./imagens/bands/de.png" value="49">ALEMANHA (+49)</option>
                                <option data-image="./imagens/bands/ad.png" value="376">ANDORRA (+376)</option>
                                <option data-image="./imagens/bands/ao.png" value="244">ANGOLA (+244)</option>
                                <option data-image="./imagens/bands/ai.png" value="1">ANGUILLA (+1)</option>
                                <option data-image="./imagens/bands/ag.png" value="1">ANTIGUA (+1)</option>
                                <option data-image="./imagens/bands/sa.png" value="966">ARABIAAUDITA (+966)</option>
                                <option data-image="./imagens/bands/dz.png" value="213">ARGELIA (+213)</option>
                                <option data-image="./imagens/bands/ar.png" value="54">ARGENTINA (+54)</option>
                                <option data-image="./imagens/bands/am.png" value="374">ARMENIA (+374)</option>
                                <option data-image="./imagens/bands/aw.png" value="297">ARUBA (+297)</option>
                                <option data-image="./imagens/bands/au.png" value="61">AUSTRALIA (+61)</option>
                                <option data-image="./imagens/bands/at.png" value="43">AUSTRIA (+43)</option>
                                <option data-image="./imagens/bands/az.png" value="994">AZERBAIJAO (+994)</option>
                                <option data-image="./imagens/bands/bs.png" value="1">BAHAMAS (+1)</option>
                                <option data-image="./imagens/bands/bd.png" value="880">BANGLADESH (+880)</option>
                                <option data-image="./imagens/bands/bb.png" value="1">BARBADOS (+1)</option>
                                <option data-image="./imagens/bands/bh.png" value="973">BAREIN (+973)</option>
                                <option data-image="./imagens/bands/by.png" value="375">BELARUS (+375)</option>
                                <option data-image="./imagens/bands/be.png" value="32">BELGICA (+32)</option>
                                <option data-image="./imagens/bands/bz.png" value="501">BELIZE (+501)</option>
                                <option data-image="./imagens/bands/bj.png" value="229">BENIN (+229)</option>
                                <option data-image="./imagens/bands/bm.png" value="1">BERMUDAS (+1)</option>
                                <option data-image="./imagens/bands/bo.png" value="591">BOLIVIA (+591)</option>
                                <option data-image="./imagens/bands/ba.png" value="387">BOSNIA E HERZEGOVINA (+387)</option>
                                <option data-image="./imagens/bands/bw.png" value="267">BOTSUANA (+267)</option>
                                <option data-image="./imagens/bands/bn.png" value="673">BRUNEI (+673)</option>
                                <option data-image="./imagens/bands/bg.png" value="359">BULGARIA (+359)</option>
                                <option data-image="./imagens/bands/bf.png" value="226">BURKINA FASO (+226)</option>
                                <option data-image="./imagens/bands/bi.png" value="257">BURUNDI (+257)</option>
                                <option data-image="./imagens/bands/bt.png" value="975">BUTAO (+975)</option>
                                <option data-image="./imagens/bands/cv.png" value="238">CABO VERDE (+238)</option>
                                <option data-image="./imagens/bands/cm.png" value="237">CAMAROES (+237)</option>
                                <option data-image="./imagens/bands/ca.png" value="1">CANADA (+1)</option>
                                <option data-image="./imagens/bands/kz.png" value="7">CASAQUISTAO (+7)</option>
                                <option data-image="./imagens/bands/qa.png" value="974">CATAR (+974)</option>
                                <option data-image="./imagens/bands/td.png" value="235">CHADE (+235)</option>
                                <option data-image="./imagens/bands/cl.png" value="56">CHILE (+56)</option>
                                <option data-image="./imagens/bands/cn.png" value="86">CHINA (+86)</option>
                                <option data-image="./imagens/bands/cy.png" value="357">CHIPRE (+357)</option>
                                <option data-image="./imagens/bands/sg.png" value="65">CINGAPURA (+65)</option>
                                <option data-image="./imagens/bands/co.png" value="57">COLOMBIA (+57)</option>
                                <option data-image="./imagens/bands/km.png" value="269">COMORES (+269)</option>
                                <option data-image="./imagens/bands/cg.png" value="242">CONGO (+242)</option>
                                <option data-image="./imagens/bands/kr.png" value="850">COREIA DO NORTE (+850)</option>
                                <option data-image="./imagens/bands/kp.png" value="82">COREIA DO SUL (+82)</option>
                                <option data-image="./imagens/bands/ci.png" value="225">COSTA DO MARFIM (+225)</option>
                                <option data-image="./imagens/bands/cr.png" value="506">COSTA RICA (+506)</option>
                                <option data-image="./imagens/bands/hr.png" value="385">CROACIA (+385)</option>
                                <option data-image="./imagens/bands/cu.png" value="53">CUBA (+53)</option>
                                <option data-image="./imagens/bands/dk.png" value="45">DINAMARCA (+45)</option>
                                <option data-image="./imagens/bands/dj.png" value="253">DJIBUTI (+253)</option>
                                <option data-image="./imagens/bands/dm.png" value="1">DOMINICA (+1)</option>
                                <option data-image="./imagens/bands/do.png" value="1">DOMINICANA REP (+1)</option>
                                <option data-image="./imagens/bands/eg.png" value="20">EGITO (+20)</option>
                                <option data-image="./imagens/bands/sv.png" value="503">EL SALVADOR (+503)</option>
                                <option data-image="./imagens/bands/ae.png" value="971">EMIRADOS A. UNIDOS (+971)</option>
                                <option data-image="./imagens/bands/ec.png" value="593">EQUADOR (+593)</option>
                                <option data-image="./imagens/bands/er.png" value="291">ERITREA (+291)</option>
                                <option data-image="./imagens/bands/sk.png" value="386">ESLOVENIA (+386)</option>
                                <option data-image="./imagens/bands/es.png" value="34">ESPANHA (+34)</option>
                                <option data-image="./imagens/bands/us.png" value="1">ESTADOS UNIDOS (+1)</option>
                                <option data-image="./imagens/bands/ee.png" value="372">ESTONIA (+372)</option>
                                <option data-image="./imagens/bands/et.png" value="251">ETIOPIA (+251)</option>
                                <option data-image="./imagens/bands/fj.png" value="679">FIJI (+679)</option>
                                <option data-image="./imagens/bands/ph.png" value="63">FILIPINAS (+63)</option>
                                <option data-image="./imagens/bands/fi.png" value="358">FINLANDIA (+358)</option>
                                <option data-image="./imagens/bands/fr.png" value="33">FRANÇA (+33)</option>
                                <option data-image="./imagens/bands/ga.png" value="241">GABAO (+241)</option>
                                <option data-image="./imagens/bands/gm.png" value="220">GAMBIA (+220)</option>
                                <option data-image="./imagens/bands/gh.png" value="233">GANA (+233)</option>
                                <option data-image="./imagens/bands/gs.png" value="995">GEORGIA (+995)</option>
                                <option data-image="./imagens/bands/gi.png" value="350">GIBRALTAR (+350)</option>
                                <option data-image="./imagens/bands/gd.png" value="1">GRANADA (+1)</option>
                                <option data-image="./imagens/bands/gr.png" value="30">GRECIA (+30)</option>
                                <option data-image="./imagens/bands/gl.png" value="299">GROENLANDIA (+299)</option>
                                <option data-image="./imagens/bands/gp.png" value="590">GUADALUPE (+590)</option>
                                <option data-image="./imagens/bands/gu.png" value="1">GUAM (+1)</option>
                                <option data-image="./imagens/bands/gt.png" value="502">GUATEMALA (+502)</option>
                                <option data-image="./imagens/bands/gy.png" value="592">GUIANA (+592)</option>
                                <option data-image="./imagens/bands/fr.png" value="594">GUIANA FRANCESA (+594)</option>
                                <option data-image="./imagens/bands/gn.png" value="224">GUINE (+224)</option>
                                <option data-image="./imagens/bands/gq.png" value="240">GUINE EQUATORIAL (+240)</option>
                                <option data-image="./imagens/bands/gw.png" value="245">GUINE-BISSAU (+245)</option>
                                <option data-image="./imagens/bands/ht.png" value="509">HAITI (+509)</option>
                                <option data-image="./imagens/bands/nl.png" value="31">HOLANDA (+31)</option>
                                <option data-image="./imagens/bands/hn.png" value="504">HONDURAS (+504)</option>
                                <option data-image="./imagens/bands/hk.png" value="852">HONG KONG (+852)</option>
                                <option data-image="./imagens/bands/hu.png" value="36">HUNGRIA (+36)</option>
                                <option data-image="./imagens/bands/ye.png" value="967">IEMEN REP (+967).</option>
                                <option data-image="./imagens/bands/in.png" value="91">INDIA (+91)</option>
                                <option data-image="./imagens/bands/id.png" value="62">INDONESIA (+62)</option>
                                <option data-image="./imagens/bands/ir.png" value="98">IRA (+98)</option>
                                <option data-image="./imagens/bands/iq.png" value="964">IRAQUE (+964)</option>
                                <option data-image="./imagens/bands/ie.png" value="353">IRLANDA (+353)</option>
                                <option data-image="./imagens/bands/is.png" value="354">ISLANDIA (+354)</option>
                                <option data-image="./imagens/bands/il.png" value="972">ISRAEL (+972)</option>
                                <option data-image="./imagens/bands/ir.png" value="39">ITALIA (+39)</option>
                                <option data-image="./imagens/bands/jm.png" value="1">JAMAICA (+1)</option>
                                <option data-image="./imagens/bands/jp.png" value="81">JAPAO (+81)</option>
                                <option data-image="./imagens/bands/jo.png" value="962">JORDANIA (+962)</option>
                                <option data-image="./imagens/bands/ki.png" value="686">KIRIBATI (+686)</option>
                                <option data-image="./imagens/bands/kw.png" value="965">KUWEIT (+965)</option>
                                <option data-image="./imagens/bands/la.png" value="856">LAOS (+856)</option>
                                <option data-image="./imagens/bands/ls.png" value="266">LESOTO (+266)</option>
                                <option data-image="./imagens/bands/lv.png" value="371">LETONIA (+371)</option>
                                <option data-image="./imagens/bands/lb.png" value="961">LIBANO (+961)</option>
                                <option data-image="./imagens/bands/lr.png" value="231">LIBERIA (+231)</option>
                                <option data-image="./imagens/bands/ly.png" value="218">LIBIA (+218)</option>
                                <option data-image="./imagens/bands/li.png" value="423">LIECHTENSTEIN (+423)</option>
                                <option data-image="./imagens/bands/lt.png" value="370">LITUANIA (+370)</option>
                                <option data-image="./imagens/bands/lu.png" value="352">LUXEMBURGO (+352)</option>
                                <option data-image="./imagens/bands/mo.png" value="853">MACAU (+853)</option>
                                <option data-image="./imagens/bands/mk.png" value="389">MACEDONIA (+389)</option>
                                <option data-image="./imagens/bands/mg.png" value="261">MADAGASCAR (+261)</option>
                                <option data-image="./imagens/bands/my.png" value="60">MALASIA (+60)</option>
                                <option data-image="./imagens/bands/mw.png" value="265">MALAVI (+265)</option>
                                <option data-image="./imagens/bands/mv.png" value="960">MALDIVAS (+960)</option>
                                <option data-image="./imagens/bands/ml.png" value="223">MALI (+223)</option>
                                <option data-image="./imagens/bands/mt.png" value="356">MALTA (+356)</option>
                                <option data-image="./imagens/bands/fk.png" value="500">MALVINAS ILHAS (+500)</option>
                                <option data-image="./imagens/bands/mp.png" value="1">MARIANAS NORTE ISL (+1).</option>
                                <option data-image="./imagens/bands/ma.png" value="212">MARROCOS (+212)</option>
                                <option data-image="./imagens/bands/mh.png" value="692">MARSHALL ILHAS (+692)</option>
                                <option data-image="./imagens/bands/mq.png" value="596">MARTINICA (+596)</option>
                                <option data-image="./imagens/bands/mu.png" value="230">MAURICIO (+230)</option>
                                <option data-image="./imagens/bands/mr.png" value="222">MAURITANIA (+222)</option>
                                <option data-image="./imagens/bands/mx.png" value="52">MEXICO (+52)</option>
                                <option data-image="./imagens/bands/fm.png" value="691">MICRONESIA (+691)</option>
                                <option data-image="./imagens/bands/mz.png" value="258">MOCAMBIQUE (+258)</option>
                                <option data-image="./imagens/bands/md.png" value="373">MOLDOVA (+373)</option>
                                <option data-image="./imagens/bands/mn.png" value="976">MONGOLIA (+976)</option>
                                <option data-image="./imagens/bands/me.png" value="382">MONTENEGRO (+382)</option>
                                <option data-image="./imagens/bands/ms.png" value="1">MONTE SERRAT (+1)</option>
                                <option data-image="./imagens/bands/na.png" value="264">NAMIBIA (+264)</option>
                                <option data-image="./imagens/bands/nr.png" value="674">NAURU (+674)</option>
                                <option data-image="./imagens/bands/np.png" value="977">NEPAL (+977)</option>
                                <option data-image="./imagens/bands/ni.png" value="505">NICARAGUA (+505)</option>
                                <option data-image="./imagens/bands/ne.png" value="227">NIGER (+227)</option>
                                <option data-image="./imagens/bands/ng.png" value="234">NIGERIA (+234)</option>
                                <option data-image="./imagens/bands/no.png" value="47">NORUEGA (+47)</option>
                                <option data-image="./imagens/bands/nc.png" value="687">NOVA CALEDONIA (+687)</option>
                                <option data-image="./imagens/bands/nz.png" value="64">NOVA ZELANDIA (+64)</option>
                                <option data-image="./imagens/bands/om.png" value="968">OMA (+968)</option>
                                <option data-image="./imagens/bands/pw.png" value="680">PALAU (+680)</option>
                                <option data-image="./imagens/bands/ps.png" value="970">PALESTINA (+970)</option>
                                <option data-image="./imagens/bands/pa.png" value="507">PANAMA (+507)</option>
                                <option data-image="./imagens/bands/pk.png" value="92">PAQUISTAO (+92)</option>
                                <option data-image="./imagens/bands/py.png" value="595">PARAGUAI (+595)</option>
                                <option data-image="./imagens/bands/pe.png" value="51">PERU (+51)</option>
                                <option data-image="./imagens/bands/pl.png" value="48">POLONIA (+48)</option>
                                <option data-image="./imagens/bands/pr.png" value="1">PORTO RICO (+1)</option>
                                <option data-image="./imagens/bands/pt.png" value="351">PORTUGAL (+351)</option>
                                <option data-image="./imagens/bands/mc.png" value="377">PRINCIPADO MONACO (+377)</option>
                                <option data-image="./imagens/bands/ke.png" value="254">QUENIA (+254)</option>
                                <option data-image="./imagens/bands/kg.png" value="996">QUIRGUIZIA (+996)</option>
                                <option data-image="./imagens/bands/gb.png" value="44">REINO UNIDO (+44)</option>
                                <option data-image="./imagens/bands/cf.png" value="236">REP.CENTRO AFRICANA (+236)</option>
                                <option data-image="./imagens/bands/sk.png" value="421">REP.ESLOVAQUIA (+421)</option>
                                <option data-image="./imagens/bands/cz.png" value="420">REP.TCHECA (+420)</option>
                                <option data-image="./imagens/bands/ro.png" value="40">ROMENIA (+40)</option>
                                <option data-image="./imagens/bands/rw.png" value="250">RUANDA (+250)</option>
                                <option data-image="./imagens/bands/ru.png" value="7">RUSSIA (+7)</option>
                                <option data-image="./imagens/bands/kn.png" value="1">S.KITTS & NEVIS (+1)</option>
                                <option data-image="./imagens/bands/vc.png" value="1">S.VICENTE ILHAS (+1)</option>
                                <option data-image="./imagens/bands/eh.png" value="833">SAARA OCIDENTAL (+833)</option>
                                <option data-image="./imagens/bands/sb.png" value="677">SALOMAO ILHAS (+677)</option>
                                <option data-image="./imagens/bands/ws.png" value="685">SAMOA (+685)</option>
                                <option data-image="./imagens/bands/as.png" value="684">SAMOA AMERICANA (+684)</option>
                                <option data-image="./imagens/bands/lc.png" value="1">SANTA LUCIA (+1)</option>
                                <option data-image="./imagens/bands/sm.png" value="378">SAO MARINO (+378)</option>
                                <option data-image="./imagens/bands/st.png" value="239">SAO TOME E PRINCIPE (+239)</option>
                                <option data-image="./imagens/bands/sn.png" value="221">SENEGAL (+221)</option>
                                <option data-image="./imagens/bands/sl.png" value="232">SERRA LEOA (+232)</option>
                                <option data-image="./imagens/bands/rs.png" value="381">SÉRVIA (+381)</option>
                                <option data-image="./imagens/bands/sc.png" value="248">SEYCHELLES (+248)</option>
                                <option data-image="./imagens/bands/sy.png" value="963">SIRIA (+963)</option>
                                <option data-image="./imagens/bands/so.png" value="252">SOMALIA (+252)</option>
                                <option data-image="./imagens/bands/lk.png" value="94">SRI-LANKA (+94)</option>
                                <option data-image="./imagens/bands/pm.png" value="508">ST.PIERRE E MIQUELON (+508)</option>
                                <option data-image="./imagens/bands/sh.png" value="290">STA HELENA ILHAS (+290)</option>
                                <option data-image="./imagens/bands/sz.png" value="268">SUAZILANDIA (+268)</option>
                                <option data-image="./imagens/bands/sd.png" value="249">SUDAO (+249)</option>
                                <option data-image="./imagens/bands/se.png" value="46">SUECIA (+46)</option>
                                <option data-image="./imagens/bands/ch.png" value="41">SUICA (+41)</option>
                                <option data-image="./imagens/bands/sr.png" value="597">SURINAME (+597)</option>
                                <option data-image="./imagens/bands/tj.png" value="992">TADJIQUISTAO (+992)</option>
                                <option data-image="./imagens/bands/th.png" value="66">TAILANDIA (+66)</option>
                                <option data-image="./imagens/bands/tz.png" value="255">TANZANIA (+255)</option>
                                <option data-image="./imagens/bands/tf.png" value="672">TERRIT.EXT.AUSTRALIA (+672)</option>
                                <option data-image="./imagens/bands/tl.png" value="670">TIMOR LESTE (+670)</option>
                                <option data-image="./imagens/bands/tg.png" value="228">TOGO (+228)</option>
                                <option data-image="./imagens/bands/to.png" value="676">TONGA (+676)</option>
                                <option data-image="./imagens/bands/tk.png" value="690">TOQUELAU (+690)</option>
                                <option data-image="./imagens/bands/tt.png" value="1">TRINIDAD E TOBAGO (+1)</option>
                                <option data-image="./imagens/bands/tn.png" value="216">TUNISIA (+216)</option>
                                <option data-image="./imagens/bands/tm.png" value="993">TURCOMENIA (+993)</option>
                                <option data-image="./imagens/bands/tc.png" value="1">TURKS E CAICOS ILHAS (+1)</option>
                                <option data-image="./imagens/bands/tr.png" value="90">TURQUIA (+90)</option>
                                <option data-image="./imagens/bands/tv.png" value="688">TUVALU (+688)</option>
                                <option data-image="./imagens/bands/ua.png" value="380">UCRANIA (+380)</option>
                                <option data-image="./imagens/bands/ug.png" value="256">UGANDA (+256)</option>
                                <option data-image="./imagens/bands/mm.png" value="95">UNIAO DE MYANMAR (+95)</option>
                                <option data-image="./imagens/bands/uy.png" value="598">URUGUAI (+598)</option>
                                <option data-image="./imagens/bands/uz.png" value="998">UZBEQUISTAO (+998)</option>
                                <option data-image="./imagens/bands/vu.png" value="678">VANUATU (+678)</option>
                                <option data-image="./imagens/bands/ve.png" value="58">VENEZUELA (+58)</option>
                                <option data-image="./imagens/bands/vn.png" value="84">VIETNA (+84)</option>
                                <option data-image="./imagens/bands/vi.png" value="1">VIRGENS A. ILHAS (+1)</option>
                                <option data-image="./imagens/bands/vg.png" value="1">VIRGENS B.ILHAS (+1)</option>
                                <option data-image="./imagens/bands/wf.png" value="839">WAKE ILHAS (+839)</option>
                                <option data-image="./imagens/bands/wf.png" value="681">WALLIS E FUTUNA (+681)</option>
                                <option data-image="./imagens/bands/zm.png" value="260">ZAMBIA (+260)</option>
                                <option data-image="./imagens/bands/zw.png" value="263">ZIMBABUE (+263)</option>
                            </select>
                        </div>
                        
                        <div class="col-md-10 col-sm-12 m-auto mt-4">
                            <textarea onfocus="this.select()" style="font-size: 20px;" name="msg" class="form-control msg text-primary" placeholder="Mensagem (opcional)" aria-label="DDI"></textarea>
                        </div>
                        <div class="row pt-2 justify-content-center mb-4">
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <div class="col-lg-2 col-md-6 col-sm-12 mt-2">
                                        <input onfocus="this.select()" type="text" style="font-size: 20px;" name="ddd" class="form-control ddd text-primary" placeholder="DDD" aria-label="DDD">
                                    </div>
                                    <div class="col-lg-5 col-md-8 col-sm-12 mt-2">
                                        <input onfocus="this.select()" type="text" style="font-size: 20px;" name="tel" class="form-control tel text-primary" placeholder="Telefone" id="tel" aria-label="Telefone">
                                    </div>
                                    <button type="submit" id="btn-send" class="btn btn-primary col-lg-2 col-md-4 col-sm-12 mt-2">Enviar</button>
                                    @csrf
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>