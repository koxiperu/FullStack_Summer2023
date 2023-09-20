import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class WeatherServiceService {

  constructor(private wh:HttpClient) { }

  getCurrentWeather(){
    return this.wh.get("http://api.weatherbit.io/v2.0/current?key=967980a513a74192890477436d728a43&city=Luxembourg");
  }
  getForecast(){
    return this.wh.get("https://api.weatherbit.io/v2.0/forecast/daily?city=Luxembourg&key=967980a513a74192890477436d728a43");
  }
  getAlert(){
    return this.wh.get("https://api.weatherbit.io/v2.0/forecast/daily?city=Luxembourg&key=967980a513a74192890477436d728a43");
  }
}
