import { NgModule }              from '@angular/core';
import { RouterModule, Routes }  from '@angular/router';

import { CardComponent } from './card/card.component';
import { EventDetailComponent } from './event-detail/event-detail.component';
 
 
const appRoutes: Routes = [
  { path: 'events', component: CardComponent },
  { path: 'events/:id', component: CardComponent },
  { path: 'event/:id', component: EventDetailComponent },
  { path: '',
    redirectTo: '/events',
    pathMatch: 'full'
  },
];
 
@NgModule({
  imports: [
    RouterModule.forRoot(appRoutes)
  ],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule {}