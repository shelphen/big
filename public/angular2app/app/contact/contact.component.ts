import { Component } from "@angular/core";

@Component({
  selector: "contact",
  templateUrl: "angular2app/app/contact/contact.component.html",
  styleUrls: ["angular2app/app/contact/contact.component.css"]
})
export class ContactComponent {
  slider = {
    title: "Contáctenos",
    image: "img/contact/business-world.jpg",
    message: "Conéctate con nosotros"
  };
  BIG  = {
    email: "info@businessideasgroup.com.pe",
    location: "Calle Ramón Cerdeira #175, dep. 301, San Borja(Perú, Lima 36)"
  };
}