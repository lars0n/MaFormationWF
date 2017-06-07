// -- 1.Importation de la Librairie Angular Core
import { Component } from '@angular/core';
import { Contact }   from './shared/models/contact';

// -- 2.Déclaration du composant
@Component({
  // -- 2.a :  Le sélécteur pour lerendu dans l'application
  selector: 'app-root',

  // 2.b Le contenu HTML de notre composant
  templateUrl: './app.component.html',
  // -- 2.c : Les Styles CSS
  styleUrls: ['./app.component.css']
})

// -- Notre code JS
export class AppComponent {
  title: string = 'contacts';
  // -- Choix de mon utilisateur actif
  contactActif: Contact;

  // -- Déclaration d'un Objet Contact
  contact = {
    id : 1,
    fullname : 'hugo LIEGEARD',
    username : 'hugoliegeard'
  }

  // -- je travail avec des Contacts
  Contacts: Contact[] = [
    {id : 1, fullname : 'hugo LIEGEARD', username : 'hugoliegeard'},
    {id : 2, fullname : 'Tangy MANAS', username : 'tangymanas'},
    {id : 3, fullname : 'Yimin JI', username : 'yiminju'}
  ]

  // -- Ma fonction choisir contact, prend un contact en paramètre, et le transmet a la variable contactActif
  choisirUnContact(contact) {
    this.contactActif = contact;
    console.log(this.contactActif);  
  }
}
