package com.upemor;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.HashSet;
import java.util.LinkedList;
import java.util.Map;
import java.util.Queue;
import java.util.Set;
import java.util.Stack;
import lombok.Getter;
import lombok.Setter;

@Getter
@Setter
public class Graph<T> {
  private String label;
  private Map<String, Vertex<T>> vertexs;

  public Graph(String label) {
    this.label = label;
    this.vertexs = new HashMap<>();
  }

  public void addVertex(Vertex<T> v) {
    this.vertexs.put(v.getLabel(), v);
  }

  public void addVertexs(Vertex<T>... vertexs) {
    for (Vertex<T> vertex : vertexs) {
      addVertex(vertex);
    }
  }

  public void recorridoEnAnchura(String startLabel) {
    Queue<Vertex<T>> queue = new LinkedList<>();
    Set<String> visited = new HashSet<>();

    Vertex<T> startVertex = vertexs.get(startLabel);
    if (startVertex == null) {
      System.out.println("Vértice de inicio no encontrado.");
      return;
    }

    System.out.print("Recorrido en anchura empezando por: " + startVertex.getLabel() + " {");

    queue.add(startVertex);
    visited.add(startLabel);

    while (!queue.isEmpty()) {
      Vertex<T> current = queue.poll();
      System.out.print(" " + current.getLabel());

      for (Vertex<T> neighbor : current.getEdges().values()) {
        if (!visited.contains(neighbor.getLabel())) {
          visited.add(neighbor.getLabel());
          queue.add(neighbor);
        }
      }
    }
    System.out.println("}");
  }

  public void recorridoEnProfundidad(String startLabel) {
    Stack<Vertex<T>> stack = new Stack<>();
    Set<String> visited = new HashSet<>();

    Vertex<T> startVertex = vertexs.get(startLabel);
    if (startVertex == null) {
      System.out.println("Vértice de inicio no encontrado.");
      return;
    }

    System.out.print("Recorrido en profundidad empezando por: " + startVertex.getLabel() + " {");

    stack.add(startVertex);
    visited.add(startLabel);

    while (!stack.isEmpty()) {
      Vertex<T> current = stack.pop();
      System.out.print(" " + current.getLabel());

      for (Vertex<T> neighbor : current.getEdges().values()) {
        if (!visited.contains(neighbor.getLabel())) {
          visited.add(neighbor.getLabel());
          stack.add(neighbor);
        }
      }
    }
    System.out.println("}");
  }
}
