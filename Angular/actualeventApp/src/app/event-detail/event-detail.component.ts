import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Params }   from '@angular/router';
import { Location }                 from '@angular/common';
import 'rxjs/add/operator/switchMap';


import { EventService } from "app/event.service";

@Component({
  selector: 'app-event-detail',
  templateUrl: './event-detail.component.html',
  styleUrls: ['./event-detail.component.css']
})
export class EventDetailComponent implements OnInit {
  eventtable: any[];
  text: any;

  constructor(
    private eventService: EventService,
    private route: ActivatedRoute,
    private location: Location
  ) { }

  ngOnInit(): void {
    this.route.params
            .switchMap((params: Params) => this.eventService.getEvent(+params['id']))// le + permet de transformer en type number
            .subscribe(event => {this.eventtable = event; this.text = JSON.parse(event[0].description)})
  }

  close(): void {
        this.location.back();
  }

}
