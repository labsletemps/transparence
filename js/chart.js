var zoomPie = function (self) {
    self.sector.stop();
    self.sector.scale(1.1, 1.1, self.cx, self.cy);
    
    if (self.label) {
        self.label[0].stop();
        self.label[0].attr({ r: 7.5 });
        self.label[1].attr({ "font-weight": 800 });
    }
};

var unzoomPie = function (self) {
    self.sector.animate({ transform: 's1 1 ' + self.cx + ' ' + self.cy }, 500, "bounce");
    
    if (self.label) {
        self.label[0].animate({ r: 5 }, 500, "bounce");
        self.label[1].attr({ "font-weight": 400 });
    }
};

var createPie = function (r, x, y, radius, values, keys) {
    var pie = r.piechart(x, y, radius, values, { legend: keys, legendpos: "south", legendcolor: "#000", stroke: "#FFF8D3", strokewidth: "1" });
    
    pie.hover(function () {
        zoomPie(this);
    }, function () {
        unzoomPie(this);
    });
};

var createPieLabel = function (r, x, y, value) {
    r.text(x, y, value).attr({ font: "20px Helvetica, Arial, sans-serif" }).attr({ fill: "#000" });
};

var r = Raphael('pie-charts');
createPie(r, 110, 160, 75, [126,50,30,24,15], ['ruby %%','javascript %%','python %%','perl %%','php %%']);
createPieLabel(r, 110, 50, 'Languages');

