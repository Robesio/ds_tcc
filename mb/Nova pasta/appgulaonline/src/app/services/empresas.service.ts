import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { Empresas } from "../models/empresas";
import { URLBASE } from "../config/api.config";

@Injectable()
export class EmpresasService {

    constructor(public HttpClient: HttpClient) { }

    get(empresas: Empresas) {
        var url = URLBASE.urlBase + "/route.tbcadastro.php?id_ca=" + empresas.linksite;
        return this.HttpClient.get<Empresas[]>(url);
    }
}