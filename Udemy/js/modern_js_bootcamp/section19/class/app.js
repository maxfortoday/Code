class Color {
  constructor(r,g,b) {
    this.r = r;
    this.g = g;
    this.b = b;
  }
  hex() {
    const {r,g,b} = this;
    return ('#' + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1))
  }
  innerRgb() {
    const {r,g,b} = this;
    return `${r},${g},${b}`; 
  }
  rgb() {
    return `rgb(${this.innerRgb()})`; 
  }
  rgba(a=1.0) {
    return `rgba(${this.innerRgb()},${a})`;
  }
}

const color1 = new Color(40,255,50);
const color2 = new Color(255,40,50,0.3)