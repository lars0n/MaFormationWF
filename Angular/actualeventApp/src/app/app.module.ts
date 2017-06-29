import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpModule } from '@angular/http';

import { AppRoutingModule } from './app-routing.module';

import { EventService } from './event.service';

import { AppComponent } from './app.component';
import { HeaderAppComponent } from './header-app/header-app.component';
import { JumbotronComponent } from './jumbotron/jumbotron.component';
import { ContaintContentComponent } from './containt-content/containt-content.component';
import { CardComponent } from './card/card.component';
import { EventDetailComponent } from './event-detail/event-detail.component';
import { CategoriesComponent } from './categories/categories.component';

import { AgmCoreModule } from '@agm/core';

@NgModule({
  declarations: [
    AppComponent,
    HeaderAppComponent,
    JumbotronComponent,
    ContaintContentComponent,
    CardComponent,
    EventDetailComponent,
    CategoriesComponent
  ],
  imports: [
    BrowserModule,
    HttpModule,
    AppRoutingModule,
    AgmCoreModule.forRoot({
      apiKey: 'AIzaSyBnCpjOumG-b7yN-1qVDBPp5rsyRrYGa4Y'
    })
  ],
  providers: [EventService],
  bootstrap: [AppComponent]
})
export class AppModule { }
