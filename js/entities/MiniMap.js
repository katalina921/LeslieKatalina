game.MiniMap = me.Entity.extend({
    init: function(x, y, settings){
        this._super(me.Entity, "init", [x, y, {
                image: "minimap",
                width:463,
                height:149,
                spritewidth:"463",
                spriteheight:"149",
                getShape: function(){
                    return(new me.Rect(0, 0, 463, 149)).toPolygon();
                }
        }]);
        this.floating = true;
    
    }
});
