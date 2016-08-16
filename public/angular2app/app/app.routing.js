"use strict";
var router_1 = require("@angular/router");
var welcome_component_1 = require("./welcome/welcome.component");
var about_component_1 = require("./about/about.component");
var event_list_component_1 = require("./event/event-list.component");
var contact_component_1 = require("./contact/contact.component");
var appRoutes = [
    {
        path: "",
        component: welcome_component_1.WelcomeComponent
    },
    {
        path: "about",
        component: about_component_1.AboutComponent
    },
    {
        path: "event",
        component: event_list_component_1.EventListComponent
    },
    {
        path: "contact",
        component: contact_component_1.ContactComponent
    }
];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map