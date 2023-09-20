import { Component } from '@angular/core';
import { WeatherServiceService } from '../weather-service.service';


@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss']
})
export class Tab1Page {
  cW:any={};
  icon:string="";
  name:string="";
  temp:number=0;
  feeltemp:number=0;
  windDir:string="";
  windForce:number=0;
  cloudCov:number=0;
  pres:number=0;
  hum:number=0;
  vis:number=0;
  presu:number=0;
  currentWeather:any={};
  constructor(private wc:WeatherServiceService) {}
  ngOnInit(){
    this.wc.getCurrentWeather().subscribe((res)=>{
      this.cW=res;
      this.currentWeather=this.cW.data[0];
      this.icon="../../assets/icon/"+this.currentWeather.weather.icon+".png";
      this.name=this.currentWeather.weather.description;
      this.temp=this.currentWeather.temp;
      this.feeltemp=this.currentWeather.app_temp;
      this.windDir=this.currentWeather.wind_cdir;
      this.windForce=this.currentWeather.wind_spd;
      this.cloudCov=this.currentWeather.clouds;
      this.hum=this.currentWeather.rh;
      this.vis=this.currentWeather.vis;
      this.presu=this.currentWeather.pres;
    })
  }
}
