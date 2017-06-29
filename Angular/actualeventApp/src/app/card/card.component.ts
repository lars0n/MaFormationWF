import { Component, OnInit } from '@angular/core';
import { ActivatedRoute,Params }   from '@angular/router';

import 'rxjs/add/operator/switchMap';

import { EventService } from '../event.service';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.css']
})
export class CardComponent implements OnInit {
  /*events: any[];*/
  events: any[];

  constructor(private eventService: EventService, private route: ActivatedRoute) { }

  ngOnInit(): void {
    /*this.getEvents();*/
    this.route.params
            .switchMap((params: Params) => this.eventService.getEvents(+params['id']))// le + permet de transformer en type number
            .subscribe(events => this.events = events);
  }

  /*getEvents(): void {
    this.eventService.getEvents().then(events => this.events = events);  
  }*/

  // pas util(eventemiter)
  /*unTruc(idevent) {
    console.log(idevent);
  }*/

}
