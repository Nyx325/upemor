package com.upemor;

import java.util.ArrayList;
import java.util.List;

public class Vertex {
  private String label;
  private int value;
  private List<Vertex> edges;

  public Vertex(String label, int value) {
    this.label = label;
    this.value = value;
    this.edges = new ArrayList<>();
  }

  public List<Vertex> getEdges() {
    return edges;
  }

  public void setEdges(List<Vertex> edges) {
    this.edges = edges;
  }

  public String getLabel() {
    return label;
  }

  public void setLabel(String label) {
    this.label = label;
  }

  public int getValue() {
    return value;
  }

  public void setValue(int value) {
    this.value = value;
  }

  public void add(Vertex v) {
    edges.add(v);
  }

  public void addAll(Vertex... vList) {
    for (Vertex v : vList) {
      this.add(v);
    }
  }

  public String toString() {
    return "[" + label + "] -> " + value;
  }
}
