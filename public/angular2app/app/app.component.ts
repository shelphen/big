import { Component } from "@angular/core";

@Component({
  selector: "app",
  templateUrl: "angular2app/app/app.component.html"
})
export class AppComponent {
  onActivate(e) {
    window.scrollTo(0, 0);
  }
}
