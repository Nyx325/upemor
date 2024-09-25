package com.upemor;

import java.util.HashMap;
import java.util.Map;
import lombok.Getter;
import lombok.Setter;

@Getter
@Setter
public class Vertex<T> {
  private String label;
  private T data;
  private Map<String, Vertex<T>> edges;

  public Vertex(String label, T data) {
    this.label = label;
    this.data = data;
    this.edges = new HashMap<>();
  }

  public void addEdge(Vertex<T> v) { this.edges.put(v.label, v); }

  public void addEdges(Vertex<T>... vertexs) {
    for (Vertex<T> vertex : vertexs) {
      this.addEdge(vertex);
    }
  }

  @Override
  public String toString() {
    return label + " -> " + data;
  }

  public void printEdges() {
    System.out.println(this + " {");
    for (String key : this.edges.keySet()) {
      Vertex<T> vertex = this.edges.get(key);
      System.out.println("  " + vertex);
    }
    System.out.println("}");
  }
}
