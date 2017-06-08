import { Component, Output, EventEmitter } from '@angular/core';
import { Contact }   from '../shared/models/contact' ; 

@Component({
  selector: 'app-ajouter-contact',
  templateUrl: './ajouter-contact.component.html',
  styleUrls: ['./ajouter-contact.component.css']
})
export class AjouterContactComponent {

    @Output() unContactEstCree = new EventEmitter()
  // -- Création d'un nouveau contact de Type Contact
    nouveauContact: Contact = new Contact();
    active: boolean = true;
    
    // -- Fonction appeler apres le submit du formulaire
    submitContact() {
      // Ici, a la soumission, j'emet mon évèement
      this.unContactEstCree.emit({ contact: this.nouveauContact })

      //console.log(this.nouveauContact);

      // -- Après la soumission, je réinitialise le nouveau contact
      this.nouveauContact = new Contact();

      // -- je passe ensuite mon formulaire a fasle, puis immediatemment aprés à true, ce qui a pour consequence de le détruire dans le DOM puis de le  re-créer
      this.active=false;
      setTimeout(()=> this.active = true, 0)
    }
}
