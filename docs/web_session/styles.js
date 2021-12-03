var styles = [ {
  "format_version" : "1.0",
  "generated_by" : "cytoscape-3.9.0",
  "target_cytoscapejs_version" : "~2.1",
  "title" : "default",
  "style" : [ {
    "selector" : "node",
    "css" : {
      "shape" : "diamond",
      "border-width" : 0.0,
      "border-opacity" : 1.0,
      "text-valign" : "center",
      "text-halign" : "center",
      "border-color" : "rgb(204,204,204)",
      "background-color" : "rgb(137,208,245)",
      "width" : 35.0,
      "height" : 35.0,
      "background-opacity" : 1.0,
      "font-size" : 12,
      "font-family" : "SansSerif",
      "font-weight" : "normal",
      "text-opacity" : 1.0,
      "color" : "rgb(0,0,0)",
      "content" : "data(name)"
    }
  }, {
    "selector" : "node[Location_attribute = 'location']",
    "css" : {
      "shape" : "ellipse"
    }
  }, {
    "selector" : "node[Degree > 136]",
    "css" : {
      "background-color" : "rgb(68,1,84)"
    }
  }, {
    "selector" : "node[Degree = 136]",
    "css" : {
      "background-color" : "rgb(8,69,148)"
    }
  }, {
    "selector" : "node[Degree > 67.99999869][Degree < 136]",
    "css" : {
      "background-color" : "mapData(Degree,67.99999869,136,rgb(33,145,140),rgb(8,69,148))"
    }
  }, {
    "selector" : "node[Degree > 1][Degree < 67.99999869]",
    "css" : {
      "background-color" : "mapData(Degree,1,67.99999869,rgb(227,26,28),rgb(33,145,140))"
    }
  }, {
    "selector" : "node[Degree = 1]",
    "css" : {
      "background-color" : "rgb(227,26,28)"
    }
  }, {
    "selector" : "node[Degree < 1]",
    "css" : {
      "background-color" : "rgb(239,59,44)"
    }
  }, {
    "selector" : "node:selected",
    "css" : {
      "background-color" : "rgb(255,255,0)"
    }
  }, {
    "selector" : "edge",
    "css" : {
      "content" : "",
      "line-style" : "solid",
      "width" : 2.0,
      "line-color" : "rgb(132,132,132)",
      "opacity" : 1.0,
      "font-size" : 10,
      "target-arrow-color" : "rgb(0,0,0)",
      "color" : "rgb(0,0,0)",
      "text-opacity" : 1.0,
      "target-arrow-shape" : "none",
      "source-arrow-color" : "rgb(0,0,0)",
      "font-family" : "Dialog",
      "font-weight" : "normal",
      "source-arrow-shape" : "none"
    }
  }, {
    "selector" : "edge[shared_interaction = 'Gameplay']",
    "css" : {
      "line-color" : "rgb(116,196,118)"
    }
  }, {
    "selector" : "edge[shared_interaction = 'Opening']",
    "css" : {
      "line-color" : "rgb(255,237,160)"
    }
  }, {
    "selector" : "edge[shared_interaction = 'Normal']",
    "css" : {
      "line-color" : "rgb(252,141,89)"
    }
  }, {
    "selector" : "edge[shared_interaction = 'Special Ending']",
    "css" : {
      "line-color" : "rgb(106,81,163)"
    }
  }, {
    "selector" : "edge:selected",
    "css" : {
      "line-color" : "rgb(255,0,0)"
    }
  } ]
} ]