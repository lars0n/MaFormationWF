import { Component, OnInit, Output, EventEmitter } from '@angular/core';


@Component({
  selector: 'app-categories',
  templateUrl: './categories.component.html',
  styleUrls: ['./categories.component.css']
})
export class CategoriesComponent implements OnInit {
  showCategorie: boolean = false;

  // j'ai voulu sortire la catégori avec un output mais enfin de compte c'est inutil
  //@Output() categorieID = new EventEmitter();

  constructor() { }

  ngOnInit() {
  }

  toggleCategorie() {
    if(this.showCategorie) {
      this.showCategorie = false;
    }else {
      this.showCategorie = true;
    }
  }

  /*goCategorie(id: number){
    this.categorieID.emit(id);
  }*/

}
