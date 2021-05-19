import { Component, OnInit } from '@angular/core';
import { NavController, NavParams } from '@ionic/angular';
import { Empresas } from 'src/app/models/empresas';
import { EmpresasService } from 'src/app/services/empresas.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.page.html',
  styleUrls: ['./home.page.scss'],
})
export class HomePage {
  //emm: Empresas[];

  constructor() { }

  ngOnInit() {
  }
  /*ionViewDidLoad() {
    let empresas: Empresas = { linksite: "" }
    this.empresasService.get(empresas).subscribe(
      (resposta: Empresas[]) => {
        this.emm = resposta;
        for (let i = 0; i < this.emm.length; i++) {
          this.valorTotal += parseFloat(this.esss[i].valor);
        }
      },
      (error) => {
        console.log(error)
      }
    );
  }*/

}
