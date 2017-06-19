import { Component, OnInit } from '@angular/core';
import { Router }   from '@angular/router'

import { EventService } from '../event.service';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.css']
})
export class CardComponent implements OnInit {
  /*events: any[];*/
  events: any[];

  constructor(private eventService: EventService, private router: Router) { }

  ngOnInit() {
    this.getEvents()
  }

  getEvents(): void {
    this.eventService.getEvents().then(events => this.events = events);  
  }

}
