import { Injectable } from '@angular/core';
import { Http } from "@angular/http";

import 'rxjs/add/operator/toPromise';

@Injectable()
export class EventService {
  private key = '64ab1ae0933ec33a8764df2d6b3b1d29329eea5e70d1c7d5a459d3d3debcd78f';
  private eventUrl = `https://api.paris.fr/api/data/2.2/QueFaire/get_events/?token=${this.key}&categories=Concerts&tags=&start=&end=&offset=&limit=`;


  constructor(private http: Http) { }

  getEvents(): Promise<any> {
    return this.http.get(this.eventUrl)
      .toPromise()
      .then(response => response.json().data)
      .catch(this.handleError);
  }

  getEvent(id: number): Promise<any> {
    const url = `https://api.paris.fr/api/data/2.0/QueFaire/get_activity/?token=${this.key}&id=${id}`;
    return this.http.get(url)
      .toPromise()
      .then(response => response.json().data)
      .catch(this.handleError);
  }
 
  private handleError(error: any): Promise<any> {
    console.log('an error occurred', error);  // for demo purposes only
    return Promise.reject(error.message || error);
  }

}
