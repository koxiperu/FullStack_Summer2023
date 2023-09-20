import { Component } from '@angular/core';
import { WeatherServiceService } from '../weather-service.service';

@Component({
  selector: 'app-tab3',
  templateUrl: 'tab3.page.html',
  styleUrls: ['tab3.page.scss']
})
export class Tab3Page {
  a:any={};
  alerts:any=[];
  constructor(private wc:WeatherServiceService) {}
  ngOnInit(){
    this.wc.getAlert().subscribe((res)=>{
      this.a=res;
      console.log(this.a);
      this.alerts=this.a.alerts;
    })
  }

}
