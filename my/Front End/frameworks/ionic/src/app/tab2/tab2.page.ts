import { Component } from '@angular/core';
import { WeatherServiceService } from '../weather-service.service';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  f:any={};
  city:string="";
  fcArray:any=[];
  pic:string="";
  constructor(private wc:WeatherServiceService) {};
  ngOnInit(){
    this.wc.getForecast().subscribe((res)=>{
      this.f=res;      
      this.city=this.f.city_name;
      this.fcArray=this.f.data;
      console.log(this.fcArray);
      for (let i=0;i<this.fcArray.length;i++){
        this.fcArray[i].link="../../assets/icon/"+this.fcArray[i].weather.icon+".png";
      }
      console.log(this.fcArray);
    })
  }
}
