<!-- Modal filtro -->
<div class="modal fade" id="filtro" tabindex="-1" role="dialog" aria-labelledby="filtro"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
    <div class="modal-content">
      <div class="text-left mr-5">
         <button type="button" class="close cerrar1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="filtro_mayor_frm">
      <!-- pc -->
      <div class="modal-body   d-none d-md-block ">
       <h2 class="color2 mt-4 f6 font-weight-bold text-center"> Filtros de Búsqueda</h2>
       <div class="container text-center" >
         <div class="row py-1 d-flex justify-content-center">
           <div class="col-8 " >

           <div class="d-inline-block px-3 px-md-5 py-1 filtro1" id="li_verificado" onclick="cambiar_stados('verificado')" style="border: 1px solid #D9D9D9;max-width: 450px;border-radius: 3px;">
                   <span class="text-left font-weight-bold mr-0  mr-md-5" >Foto verificada</span><img src="img/Grupo 139.svg" style="" class="ml-1 ml-md-5" width="21" alt="">
                    <input type="text" name="in_verificado" id="in_verificado" value="verificado,0">
              </div>

         </div>
           
         </div>
       </div> 

      <div class="row mt-4">
        <div class="col-lg-6 col-12  pl-0" >
          <div class="fondo1y">
            <h5 class="py-2 pl-5 font-weight-bolder">PRINCIPALES</h5>
          </div>
        </div>
        <div class="col-6 pr-0 d-none d-md-block" >
          <div class="fondo1y">
              <h5 class="py-2 pl-5 font-weight-bolder">APARIENCIA</h5>
          </div>
        
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-10 pl-0">
          <p class="color3 f2 pl-3 pl-md-5 pt-4 font-weight-bold">Costo del servicio</p>
          <div>
            <div class="row">
              <div class="col-lg-5 col-6">
                <div class="row d-flex align-items-center">
                  <div class="col-lg-5 col-4 pl-3 pl-md-4">
                    <p class="pl-5 pt-3   font-weight-bold">Min</p>
                  </div>
                  <div class="col-8 col-lg-6 pl-5 pl-md-3">
                  <select class="browser-default custom-select">
                    <option selected></option>
                    <option value="1">50</option>
                    <option value="2">100</option>
                    <option value="3">150</option>
                  </select>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-4">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1 ">A1</h5>
                </div>
                  </div>
                  <div class="col-4">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1 ">Baratas</h5>
                </div>
                  </div>
                  <div class="col-4"></div>
                </div>
                
              </div>
               <div class="col-lg-5 col-6">
                <div class="row d-flex align-items-center">
                  <div class="col-3  ">
                    <p class="pl-3 pt-3  text-right font-weight-bold">Max</p>
                  </div>
                  <div class="col-6 "><select class="browser-default ml-3 ml-md-0 custom-select">
  <option selected></option>
  <option value="1">50</option>
  <option value="2">100</option>
  <option value="3">150</option>
</select></div>
                </div>
                <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1 ">Pago con tarjeta</h5>
                </div>
              </div>
            </div>
          </div>  
<p class="color3 f2 pl-5 pt-4 font-weight-bold">Edad</p>
<div class="row">
   <div class="col-5">
                <div class="row d-flex align-items-center">
                  <div class="col-5 pl-5">
                    <p class="pl-3 pt-3  font-weight-bold">Min</p>
                  </div>
                  <div class="col-6 ">
                  <select class="browser-default custom-select">
                    <option value = "0" selected></option>
                    <option value="1">50</option>
                    <option value="2">100</option>
                    <option value="3">150</option>
                  </select>
</div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder text-center px-4 py-2 marco1y filtro1 " style="width: 200px;">Joven</h5>
                </div>
                  </div>
                  
                </div>
                
              </div>
               <div class="col-5">
                <div class="row d-flex align-items-center">
                  <div class="col-5 pl-5">
                    <p class="pl-3 pt-3  font-weight-bold">Max</p>
                  </div>
                  <div class="col-6 ">
                  <select class="browser-default custom-select">
                    <option selected></option>
                    <option value="1">50</option>
                    <option value="2">100</option>
                    <option value="3">150</option>
                  </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center" style="width: 200px;">Madura</h5>
                </div>
                  </div>
                  
                </div>
                
              </div>
</div>







<p class="color3 f2 pl-5 pt-4 font-weight-bold">Atención a</p>
<div class="row">
  <div class="col-6">
     <div class="row">
                  <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 id="li_discapacitados" onclick="cambiar_stados('discapacitados')" class="f8 font-weight-bolder px-4 py-2 marco1y text-center filtro1 " style="width: 200px;">Discapacitados</h5>
                <input type="text" name="in_discapacitados" id="in_discapacitados" value="discapacitados,0">
                </div>
                  </div>
                   <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 id="li_parejas" onclick="cambiar_stados('parejas')" class="f8 font-weight-bolder px-4 py-2 marco1y text-center filtro1 " style="width: 100px;">Parejas</h5>
                  <input type="text" name="in_parejas" id="in_parejas" value="parejas,0">
                </div>
                  </div>
                  
                </div> 
  </div>
  <div class="col-6">
    <div class="row">
                  <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-0 d-inline-block">
                  <h5 id="li_mujeres" onclick="cambiar_stados('mujeres')" class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center" style="width: 200px;">Mujeres</h5>
                  <input type="text" name="in_mujeres" id="in_mujeres" value="mujeres,0">
                </div>
                  </div>
                  
                </div>
  </div>
</div>









<p class="color3 f2 pl-5 pt-4 font-weight-bold">Tipo de escort</p>
<div class="row">
  <div class="col-4"> <div class="row">
                
                   <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 id="li_agencia" onclick="cambiar_stados('agencia')" class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center" style="width: 150px;">De agencia</h5>
                  <input type="text" name="in_agencia" id="in_agencia" value="agencia,0">
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-4">
    <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 id="li_independiente" onclick="cambiar_stados('independiente')" class="f8 font-weight-bolder px-4 py-2 filtro1  marco1y text-center" style="width: 180px;">Independiente</h5>
                  <input type="text" name="in_independiente" id="in_independiente" value="independiente,0">
                </div>
                  </div>
    </div>
  
  </div>
</div>
<p class="color3 f2 pl-5 pt-4 font-weight-bold">Contacto</p>
<div class="row">
  <div class="col-6">
       <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 id="li_whatsapp" onclick="cambiar_stados('whatsapp')" class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center" style="width: 180px;">WhatsApp</h5>
                  <input type="text" name="in_whatsapp" id="in_whatsapp" value="whatsapp,0">
                </div>
                  </div>
    </div>
  </div>
</div>
 <div class="row mt-4">
        <div class="col-12 " >
          <div class="fondo1y">
            <h5 class="py-2 pl-5 font-weight-bolder">Servicios Generales</h5>
          </div>
        </div>
       
      </div>

      <div class="row">
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-3 py-2 marco1y filtro1   text-center">Actriz porno</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center">Besos boca</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-0 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center">Frances</h5>
                </div>
                  </div>
    </div>
        </div>
      </div>
      <div class="row pl-2">
  <div class="col-4"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 190px;">Eyaculación cuerpo</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-4">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center" style="width: 190px;">Eyaculación facial</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
  <div class="row pl-2">
  <div class="col-4"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 210px;">Fantasías y disfraces</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-4">
    <div class="row">
          <div class="col-10 pl-5">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-3 py-2 marco1y filtro1  text-center" style="width: 170px;">Masajes eroticos</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
 <div class="row">
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-3 py-2 marco1y filtro1  text-center">Sexo anal</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-1 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center">Trato de novia</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-0 d-inline-block">
                   <select class="browser-default custom-select ">
            <option selected>Trio</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
                </div>
                  </div>
    </div>
        </div>
      </div>
       <div class="row mt-4">
        <div class="col-12 " >
          <div class="fondo1y">
            <h5 class="py-2 pl-5 font-weight-bolder">Lugar de encuentro</h5>
          </div>
        </div>
       
      </div>
      <div class="row">
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-3 py-2 marco1y filtro1  text-center">A domicilio</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-3 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center">Cena romantica</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-4 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-0 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center">Viajes</h5>
                </div>
                  </div>
    </div>
        </div>
      </div>
            <div class="row pl-2">
  <div class="col-4"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 190px;">Club intercambio</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-4">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 190px;">Departamento propio</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
  <div class="row pl-2">
  <div class="col-4"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 190px;">Despedida de solteros</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-4">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 100px;">En un club</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
  <div class="row pl-2">
  <div class="col-4"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 190px;">En un hotel/Motel</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-4">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 190px;">Eventos y fiestas</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>

        </div>
      
        <div class="col-lg-6 col-12">
            <div class="row mt-3 d-block d-md-none">
           <div class="col-12 pl-0 " >
          <div class="fondo1y">
              <h5 class="py-2 pl-5 font-weight-bolder">APARIENCIA</h5>
          </div>
        
        </div>
        </div>
            <p class="color3 f2 pl-0 pl-md-5 pt-4 font-weight-bold">País</p>
            <div class="row">
               <div class="col-4 ml-0 ml-md-5"><select class="pl-4 browser-default custom-select" name="pais">
                <option value="0" selected>SELECCIONE</option>
                <option value="Argentina">Argentinas</option>
                    <option value="Boliviana">Bolivianas</option>
                    <option value="Brasileña">Brasileñas</option>
                    <option value="Chilena">Chilenas</option>
                    <option value="Colombiana">Colombianas</option>
                    <option value="Coste Ricense">Costarricenses</option>
                    <option value="Cubana">Cubanas</option>
                    <option value="Dominicana">Dominicanas</option>
                    <option value="Ecuatoriana">Ecuatorianas</option>
                    <option  value="Guatemalteca">Guatemaltecas</option>
                    <option  value="Hondureña">Hondureñas</option>
                    <option value="Mexicana">Mexicanas</option>
                    <option value="Nicaraguense">Nicaragüenses</option>
                    <option value="Panameña">Panameñas</option>
                    <option value="Paraguaya">Paraguayas</option>
                    <option value="Peruana">Peruanas</option>
                    <option value="Puerto Riqueña">Puertorriqueñas</option>
                    <option  value="Slavadoreña">Salvadoreñas</option>
                    <option value="Uruguaya">Uruguayas</option>
                    <option value="Venezolana">Venezolanas</option>
              </select></div>
            </div>
             <p class="color3 f2 pl-0 pl-md-5 pt-4 font-weight-bold">Etnia</p>
              <div class="row pl-4">
  <div class="col-lg-4 col-12 px-0 px-md-4"> <div class="row">
                
                   <div class="col-lg-10 col-12 px-1 px-lg-2">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center" style="width: 190px;">Andinas</h5>
                  //aqui
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12  px-0 px-md-2">
    <div class="row">
          <div class="col-lg-10 col-12 px-1 px-md-4">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-0 px-md-2 py-2 marco1y filtro1  text-center ml-0 ml-md-2 " style="width: 190px;">Morenas</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
     <div class="row pl-4">
  <div class="col-lg-4 col-12  px-0 px-md-4"> <div class="row">
                
                   <div class="col-lg-10 col-12 px-1 px-lg-2">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-0 px-md-2px-0 px-md-2 py-2 marco1y filtro1  text-center " style="width: 190px;">Piel blanca</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12  px-0 px-md-4">
    <div class="row">
          <div class="col-lg-10 col-12 px-0 px-lg-2">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-0 px-md-2 py-2 marco1y filtro1  text-center ml-1 ml-md-2" style="width: 190px;">Trigueñas</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
             <p class="color3 f2 pl-0 pl-md-5 pt-4 font-weight-bold">Estatura</p>
               <div class="row pl-4">
  <div class="col-lg-4 col-12 px-1 px-md-4"> <div class="row">
                
                   <div class="col-lg-4 col-12 px-0 px-md-2">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-0 px-md-2 py-2 marco1y filtro1  text-center " style="width: 100px;">Baja</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12 px-1 px-md-4">
    <div class="row">
          <div class="col-lg-4 col-12 px-0 px-md-2">
                    <div class="pl-0 mt-2 pl-md-0 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-0 px-md-2 py-2 marco1y filtro1  text-center ml-0 ml-md-2" style="width: 100px;">Alta</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>

             <p class="color3 f2 pl-0 pl-md-5 pt-4 font-weight-bold">Pecho</p>
                <div class="row pl-4">
  <div class="col-lg-4 col-12 px-0 px-md-2"> <div class="row">
                
                   <div class="col-10 pl-1 pl-md-4">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center " style="width: 190px;">Pechos naturales</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12 px-0 px-md-2">
    <div class="row">
          <div class="col-10 pl-1 pl-md-4">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center ml-0 ml-md-2" style="width: 190px;">Tetonas</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>

             <p class="color3 f2 pl-0 pl-md-5 pt-4 font-weight-bold">Pelo</p>
              <div class="row pl-0 pl-md-4">
  <div class="col-lg-4 col-12"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center " style="width: 190px;">Cabello negro</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center ml-0 ml-md-2" style="width: 190px;">Pelirojas</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
<div class="row pl-0 pl-md-4">
  <div class="col-lg-4 col-12"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center " style="width: 190px;">Rubias</h5>
                </div>
                  </div>
                  
                </div> </div>
 
</div>
   <p class="color3 f2 pl-0 pl-md-5 pt-4 font-weight-bold">Cuerpo</p>
     <div class="row pl-0 pl-md-4">
  <div class="col-lg-4 col-12"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center " style="width: 190px;">Delgada</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center ml-0 ml-md-2" style="width: 190px;">Gordita</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
<p class="color3 f2 pl-0 pl-md-5 pt-4 font-weight-bold">Pubis</p>
 <div class="row pl-0 pl-md-4">
  <div class="col-lg-4 col-12"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center " style="width: 150px;">Depilada</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center ml-0 ml-md-2" style="width: 150px;">Sin depilada</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
<div class="row mt-4 ">
        <div class="col-12  px-0" >
          <div class="fondo1y">
            <h5 class="py-2  pl-5 font-weight-bolder">Servicios especiales</h5>
          </div>
        </div>
       
      </div>
         <div class="row">
        <div class="col-lg-4 col-6 pl-3 pr-0 px-md-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-3 py-2 marco1y filtro1  text-center">Beso blanco</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-lg-4 col-12 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-3 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center">Beso negro</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-lg-4 col-12 pl-3 pr-0 px-md-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-0 mt-2 pl-md-0 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center">Copro</h5>
                </div>
                  </div>
    </div>
        </div>

      </div>
       <div class="row pl-0 pl-md-4">
  <div class="col-lg-4 col-12 pl-3 pr-0 px-md-0 mx-0"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-4 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center " style="width: 150px;">Fetichismo</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-1 py-2 marco1y filtro1  text-center ml-0 ml-md-2" style="width: 150px;">Garganta profunda</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
 <div class="row">
        <div class="col-lg-4 col-12 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-3 pl-md-0 mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center">Sado suave</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-lg-4 col-12 px-0 mx-0">
            <div class="row">
          <div class="col-12">
                    <div class="pl-3 pl-md-0 mt-2 pl-md-2 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-4 py-2 marco1y filtro1  text-center">Sado duro</h5>
                </div>
                  </div>
    </div>
        </div>
        <div class="col-lg-4 col-12 px-0 mx-0">
            <div class="row">
          <div class="col-10">
                    <div class="pl-3 pl-md-0 mt-2 pl-md-0 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center">Lluvia dorada</h5>
                </div>
                  </div>
    </div>
        </div>
      </div>
       <div class="row pl-0 pl-md-4">
  <div class="col-lg-4 col-12"> <div class="row">
                
                   <div class="col-10">
                    <div class="pl-0 mt-1 pl-md-0 pl-md-2 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-2 py-2 marco1y filtro1  text-center " style="width: 150px;">Strap on</h5>
                </div>
                  </div>
                  
                </div> </div>
  <div class="col-lg-4 col-12">
    <div class="row">
          <div class="col-10">
                    <div class="pl-0 pl-md-0  mt-2 pl-md-5 d-inline-block">
                  <h5 class="f8 font-weight-bolder px-1 py-2 marco1y filtro1  text-center ml-0 ml-md-2" style="width: 150px;">Squirting</h5>
                </div>
                  </div>
    </div>
  
  </div>
</div>
        </div>
      </div>


      <div class="row d-flex justify-content-center my-5  mr-1 mr-md-0">
        <div class="col-lg-5 col-12">
          <button class="btn boton10 text-white">Borrar</button>
        </div>
        <div class="col-lg-5 col-12">
           <button class="btn boton9 text-white">Buscar</button>
        </div>
      </div>
      </div>
      </form>
     <!-- fin de pc -->


<script>
  function cambiar_stados(valor){

      var campo = $("#in_"+valor).val();      
      var actual = valor + ",0";
      if(campo == actual){
      $("#in_"+valor).val(valor+",1");
      $("#li_"+valor).addClass("filtro1_activo");
      }
      else{
      $("#in_"+valor).val(valor+",0");
      $("#li_"+valor).removeClass("filtro1_activo");
      }

      
  }

  $("#filtro_mayor_frm").submit(function(e){

  e.preventDefault();

  var parametros = $("#filtro_mayor_frm").serialize();

  $.ajax({ 
        data: parametros,
        url:   'filtro_mayor.php', 
        type:  'POST',
        success:  function (response) 
          {
            $("#filtrar").html(response);						
          }
                                            
    });

  });

  
</script>