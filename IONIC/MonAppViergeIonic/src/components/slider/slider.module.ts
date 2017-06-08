import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { SliderComponent } from './slider';

@NgModule({
  declarations: [
    SliderComponent,
  ],
  imports: [
    IonicPageModule.forChild(SliderComponent),
  ],
  exports: [
    SliderComponent
  ]
})
export class SliderComponentModule {}
